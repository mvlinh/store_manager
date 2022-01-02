<?php

namespace App\Http\Controllers\admin;
use Carbon\Carbon;
use DB;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\employee;
use phpDocumentor\Reflection\Types\Null_;
class managerController extends Controller
{
    public function dashboard(){
        
        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now()->endOfMonth();
        $info['month']  = Carbon::now()->month;
        $info['employees'] = DB::table('employees')
                            ->whereColumn('employees.id','!=','employees.position_id')
                            ->get();
        $info['order'] = DB::table('bill')
                        ->wherebetween('created_at',[$start,$end])->get();
        $info['dola'] = DB::table('bill')
                        ->join('detailed_bill','bill_id','bill.id')
                        ->join('product','product_id','product.id')
                        ->wherebetween('bill.created_at',[$start,$end])
                        ->select( DB::raw('SUM(price * quantity) AS total'))
                        ->get();
        $info['event'] = DB::table('holiday')
                        ->where('date','>=',Carbon::now())
                        ->get();
        return view('admin.pages.manager.dashboard',$info);
    }
    public function addemployee(){
        return view('admin.pages.employee.addemployee');
    }
    public function customertransferhistory()
    {
        $info['info'] = DB::table('detailed_history')
                        ->join('employees as a','emp_send_id','a.id')
                        ->join('employees as b','emp_receive_id','b.id')
                        ->join('customer','customer_id','customer.id')
                        ->orderByRaw('detailed_history.created_at DESC')
                        ->select('a.avatar as sendavatar','b.avatar as receiveavatar','a.name as send','b.name as receive','customer.name as customer','detailed_history.status as status','detailed_history.created_at as start','detailed_history.updated_at as update')
                        ->get();
        // dd($info['info']);
       return view('admin.pages.customer.customertransferhistory',$info);
    }
    public function showemployee(){
        $info['employee'] = DB::table('employees')->get();
        return view('admin.pages.employee.show',$info);
    }
    public function lockemployee(Request $request){
        $status = DB::table('employees')
                ->where('id', $request->id)
                ->select('status')->first();
        $info['id']= $request->id;
        if($status->status == 1){
            $info['status'] = 0;
        $affected = DB::table('employees')
                    ->where('id', $request->id)
                    ->update(['status' => 0]);
        }
        else{
            $info['status'] = 1;
        $affected = DB::table('employees')
                        ->where('id', $request->id)
                        ->update(['status' => 1]);
        }
       
        return response()->json($info);
    }
    public function viewemployee($id){
        $info['employee'] = DB::table('employees')
                            ->where('id', $id)->first();
        $startweek  = Carbon::now()->startOfWeek();
        $startmonth  = Carbon::now()->startOfMonth();
        $startyear  = Carbon::now()->startOfYear();
        $today = Carbon::now();
        $info['week'] = DB::table('bill')->where('emp_care_id', $id)->whereBetween('created_at', [$startweek, $today])->count() + DB::table('bill')->where('emp_seller_id', $id)->whereBetween('created_at', [$startweek, $today])->count();
        $info['month'] = DB::table('bill')->where('emp_care_id', $id)->whereBetween('created_at', [$startmonth, $today])->count() + DB::table('bill')->where('emp_seller_id', $id)->whereBetween('created_at', [$startmonth, $today])->count();
        $info['year'] = DB::table('bill')->where('emp_care_id', $id)->whereBetween('created_at', [$startyear, $today])->count() + DB::table('bill')->where('emp_seller_id', $id)->whereBetween('created_at', [$startyear, $today])->count();       
        return view('admin.pages.employee.view',$info);
    }
    public function editemployee(Request $request,$id){
        
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $file->extension();
            
            $file_name = time().'-'.'avatar'.'.'.$ext;
            $file->move(public_path('assets/images/users'),$file_name); 
                $affected = DB::table('employees')
                ->where('id', $id)
                ->update(['name' => $file_name]);
        
        }
        if($request->email != Null){
            $affected = DB::table('employees')
              ->where('id', $id)
              ->update(['email' => $request->email]);
        }
        if($request->phone != Null){
            $affected = DB::table('employees')
              ->where('id', $id)
              ->update(['phone' => $request->phone]);
        }
        if($request->DoB != Null){
            $affected = DB::table('employees')
              ->where('id', $id)
              ->update(['DoB' => $request->DoB]);
        }
        if($request->name != Null){
            $affected = DB::table('employees')
              ->where('id', $id)
              ->update(['name' => $request->name]);
        }
        if($request->address != Null){
            $affected = DB::table('employees')
              ->where('id', $id)
              ->update(['address' => $request->address]);
        }
        
        if($request->status != Null){
            $affected = DB::table('employees')
              ->where('id', $id)
              ->update(['status' => $request->status]);
        }
        if($request->newpassword != Null){
            $affected = DB::table('employees')
              ->where('id', $id)
              ->update(['newpassword' => bcrypt($request->newpassword)]);
        }
        $date = Carbon::now();
        $affected = DB::table('employees')
              ->where('id', $id)
              ->update(['updated_at' => $date]);
         return redirect()->back()->with('msg', 'Successfully');
    }
    public function employeesalary(){
        $employee['employee'] = DB::table('employees')->get();
        // dd($info['employee']);
        $start = $employee['start'] = Carbon::now()->startOfMonth();
        $employee['today'] = Carbon::now();
        $employee['payroll_care'] = DB::table('bill')
                                ->join('detailed_bill', 'bill.id',  'bill_id')
                                ->join('product', 'detailed_bill.product_id', 'product.id')
                                ->join('employees' ,'bill.emp_care_id','employees.id')
                                ->whereBetween('bill.created_at',[$start, Carbon::now()])
                                ->select('employees.id as id', DB::raw('SUM(quantity*price*commission) as sum'))
                                ->groupByRaw('id')
                                ->get();
        $employee['payroll_sel'] = DB::table('bill')
                                ->join('detailed_bill', 'bill.id', 'bill_id')
                                ->join('product', 'detailed_bill.product_id', 'product.id')
                                ->join('employees' ,'bill.emp_seller_id','employees.id')
                                ->whereBetween('bill.created_at',[$start, Carbon::now()])
                                ->select('employees.id as id', DB::raw('SUM(quantity*price*commission) as sum'))
                                ->groupByRaw('id')
                                ->get();
    
        return view('admin.pages.employee.employeesalary', $employee);
    }
    public function addholiday(){
        return view('admin.pages.holiday.addholiday');
    } public function insertHoliday(Request $r){
        DB::table('holiday')->insert([
            [
            'name' => $r->name,
            'detail' => $r->detail,
            'date' => $r->date,
            'type' => $r->type,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
        return view('admin.pages.holiday.addholiday')->with('noti','Thêm thành công');
    }
}

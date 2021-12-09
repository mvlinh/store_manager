<?php

namespace App\Http\Controllers\admin;
use Carbon\Carbon;
use DB;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

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
}

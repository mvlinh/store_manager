<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\CustomerRuest;
use App\Models\Customers;
use App\Models\employee;
use App\Models\detailed_history;
use App\Models\detail_product_care;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class CustomerController extends Controller
{
    public function index(){
      
    }
    public function show_customer(Request $request){
        $customer['cus'] = DB::table('customer')->where('employee_id', Auth::id())->simplePaginate(10);
        return view('pages.customers.show',$customer);
    }
    // public function add(Request $request){
    //     $customer['customer'] = DB::table('customer')->get();
    //     return view('pages.customers.add',$customer);
    // }
    public function addCustomer(Request $request){
        // $rules = [
        //     'email' => 'required|email|unique:customer'
        // ];
        // $request->validate($data,$rules);
        if($request->name != null&&$request->phone != null){
            $flag = DB::table('customer')->where('phone',$request->phone)->first();
            if($flag){
                return 1;
            }
        $customer = new Customers;
        $customer->name = $request->name;
        $customer->employee_id = Auth::id();
        $customer->phone  = $request->phone;
        $customer->address = $request->address;
        $customer->status = $request->status;
        $customer->email = $request->email;
        $customer->save();
        return response()->json($customer);
        }
        
        $customer['customer'] = DB::table('customer')->simplePaginate(5);
        return view('pages.customers.add',$customer);
        
    }
    public function getDataCustomer(Request $request){
        
        $phone = $request->phone;
        $customer = DB::table('customer')
        ->where('phone', 'like', '%'.$phone.'%')
        ->get();
        return response()->json($customer);

    }
    function transfer_customer(){
        $customer['cus'] = DB::table('customer')->where('employee_id', Auth::id())->simplePaginate(10);
        return view('pages.customers.show',$customer);
    }
    function transfer_customer_id($id){
        $customer['cus'] = DB::table('customer')->where('employee_id', Auth::id())->simplePaginate(10);
        $customer['customer'] = Customers::find($id);
        if($customer['customer']->status != 1){
            return redirect()->route('manager_customer',['noti'=>'already exist']);
        }
        else{
            $customer['employee'] = DB::table('employees as a')
                                    ->join('employees as b','a.position_id','b.id')
                                    ->where('a.id','!=',Auth::id())
                                    ->select('a.id as id','a.name as name','b.name as position_name','a.phone as phone','a.email as email','a.address as address')
                                    ->get();
            return view('pages.customers.transfer_employee',$customer);
        }
    }
    function transfer_customer_toEmployee($id,$employee_id){
        $detail_history = new detailed_history;
        $detail_history->emp_send_id = Auth::id();
        $detail_history->emp_receive_id = $employee_id;
        $detail_history->customer_id = $id;
        $detail_history->status = 2;
        $detail_history->created_at = Carbon::now();
        $detail_history->updated_at = Carbon::now();
        $detail_history->save();
        $transfer_customer = Customers::find($id);
        $transfer_customer->status = 2;
        $transfer_customer->updated_at = Carbon::now();
        $transfer_customer->save();
        return redirect()->route('transfer_customer_show',['noti'=>'successfully']);
    }
    function receive_customer(){
        $data['data'] =  DB::table('detailed_history')
                        ->join('employees','employees.id','emp_send_id')
                        ->join('customer','customer.id','customer_id')
                        ->where('emp_receive_id',Auth::id())
                        ->where('detailed_history.status',2)
                        ->select('detailed_history.id as id','employees.name as send_name','employees.phone as send_phone','customer.name as name', 'customer.phone as phone')
                        ->get();
        // dd($data['detail']);
        return view('pages.customers.receive',$data);
    }
    function agree($id){
        $detailed_history = detailed_history::find($id);
        $detailed_history->status = 1;
        $detailed_history->save();
        $customer = Customers::find($detailed_history->customer_id);
        $customer->employee_id = Auth::id();
        $customer->save();
        $transfer_customer = Customers::find($detailed_history->customer_id);
        $transfer_customer->status = 1;
        $transfer_customer->updated_at = Carbon::now();
        $transfer_customer->save();
        return redirect()->route('transfer_customer_receive');
    }
    function refuse($id){
        $detailed_history = detailed_history::find($id);
        $detailed_history->status = 0;
        $detailed_history->save();
        $transfer_customer = Customers::find($detailed_history->customer_id);
        $transfer_customer->status = 1;
        $transfer_customer->updated_at = Carbon::now();
        $transfer_customer->save();
        return redirect()->route('transfer_customer_receive');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\bill;
use DB;
class employeeController extends Controller
{
    public function index(){
      
    }
    function show(){
        $employee['customer'] = DB::table('customer')->where('employee_id', Auth::id())->get();
        $employee['employee'] = employee::find(Auth::id());
        $employee['position'] = employee::find($employee['employee']->id);
        // $today = date("Y-m-d");
        // $week = date("W", strtotime($today));
        // $month = date("oM", strtotime($today));
        // $year = date("oY", strtotime($today));
        // $employee['week'] = DB::table('bill')->where(['emp_care_id', Auth::id(),'week(created_at)', $week])->select('created_at')->get();
        return view('pages.employees.profile',$employee);
    }
    function check_payroll(Request $request){
        // dd($request['end']);
        $employee['payroll_care'] = DB::table('bill')
                                    ->join('detailed_bill', 'bill.id', '=', 'bill_id')
                                    ->join('product', 'detailed_bill.product_id', '=', 'product.id')
                                    ->where('bill.emp_care_id', Auth::id())
                                    ->whereBetween('bill.created_at',[$request['start'], $request['end']])
                                    ->select('bill.id','price', 'commission')
                                    ->get();
        $employee['payroll_sel'] = DB::table('bill')
                                    ->join('detailed_bill', 'bill.id', '=', 'bill_id')
                                    ->join('product', 'detailed_bill.product_id', '=', 'product.id')
                                    ->where('emp_seller_id', Auth::id())
                                    ->whereBetween('bill.created_at',[$request['start'], $request['end']])
                                    ->select('bill.id','price', 'commission')
                                    ->get();
        // dd( $employee['payroll_sel']);
        $count = 0;
        foreach($employee['payroll_care'] as $pay){
            $count = $count + $pay->price * $pay->commission;
        }
        foreach($employee['payroll_sel'] as $pay){
            $count = $count + $pay->price * $pay->commission;
        }
        return redirect()->route('self_profile',['pay'=>$count/1000,'start_at' =>$request['start'],'end_at' =>$request['end']]);
    }
    function dashboard(){
        $employee['customer'] = DB::table('customer')->where('employee_id', Auth::id())->get();
        $employee['sold'] = DB::table('bill')->where('emp_care_id', Auth::id())->get();
        $employee['care'] = DB::table('bill')->where('emp_seller_id', Auth::id())->get();
        $employee['send'] = DB::table('detailed_history')->where('emp_send_id', Auth::id())->where('status',2)->get();
        $employee['recv'] = DB::table('detailed_history')->where('emp_receive_id', Auth::id())->where('status',2)->get();
        return view('pages.employees.dashboard',$employee);
    }
}

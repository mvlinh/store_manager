<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\bill;
use DB;
use Carbon\Carbon;
class employeeController extends Controller
{
    public function index(){
      
    }
    function show(){
        $employee['customer'] = DB::table('customer')->where('employee_id', Auth::id())->get();
        $employee['employee'] = employee::find(Auth::id());
        $employee['position'] = employee::find($employee['employee']->id);
        $startweek = Carbon::now()->startOfWeek();
        $startmonth = Carbon::now()->startOfMonth();
        $startyear = Carbon::now()->startOfYear();
        $today = Carbon::now();
        $employee['week'] = DB::table('bill')->where('emp_care_id', Auth::id())->whereBetween('created_at', [$startweek, $today])->count() + DB::table('bill')->where('emp_seller_id', Auth::id())->whereBetween('created_at', [$startweek, $today])->count();
        $employee['month'] = DB::table('bill')->where('emp_care_id', Auth::id())->whereBetween('created_at', [$startmonth, $today])->count() + DB::table('bill')->where('emp_seller_id', Auth::id())->whereBetween('created_at', [$startmonth, $today])->count();
        $employee['year'] = DB::table('bill')->where('emp_care_id', Auth::id())->whereBetween('created_at', [$startyear, $today])->count() + DB::table('bill')->where('emp_seller_id', Auth::id())->whereBetween('created_at', [$startyear, $today])->count();
        
        return view('pages.employees.profile',$employee);
    }
    function check_payroll(Request $request){
        // dd($request['end']);
        $employee['payroll_care'] = DB::table('bill')
                                    ->join('detailed_bill', 'bill.id', '=', 'bill_id')
                                    ->join('product', 'detailed_bill.product_id', '=', 'product.id')
                                    ->where('bill.emp_care_id', Auth::id())
                                    ->whereBetween('bill.created_at',[$request['start'], $request['end']])
                                    ->select('bill.id','price','detailed_bill.quantity as quantity', 'commission')
                                    ->get();
        $employee['payroll_sel'] = DB::table('bill')
                                    ->join('detailed_bill', 'bill.id', '=', 'bill_id')
                                    ->join('product', 'detailed_bill.product_id', '=', 'product.id')
                                    ->where('emp_seller_id', Auth::id())
                                    ->whereBetween('bill.created_at',[$request['start'], $request['end']])
                                    ->select('bill.id','price','detailed_bill.quantity as quantity', 'commission')
                                    ->get();
        // dd( $employee['payroll_sel']);
        $count = 0;
        foreach($employee['payroll_care'] as $pay){
            $count = $count + $pay->price *$pay->quantity * $pay->commission;
        }
        foreach($employee['payroll_sel'] as $pay){
            $count = $count + $pay->price *$pay->quantity * $pay->commission;
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

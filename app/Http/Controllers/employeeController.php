<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class employeeController extends Controller
{
    public function index(){
      
    }
    function show(){
        $employee['customer'] = DB::table('customer')->where('employee_id', Auth::id())->get();
        $employee['employee'] = employee::find(Auth::id());
        $employee['position'] = employee::find($employee['employee']->id);
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
        // dd( $employee['payroll_care']);
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
}

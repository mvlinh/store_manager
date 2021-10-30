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
    function check_payroll(){
        // $employee['payroll'] = 
        return redirect()->route('self_profile',['mess'=>'111']);
    }
}

<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\CustomerRuest;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{
    public function index(){
        // $customer = Customers::select('id','name', 'phone', 'email', 'status','address', 'created_at', 'id_employee')
        //     ->paginate(5);

        // return view('pages.customers.index',
        //     [
        //         'customer' => $customer
        //     ]
        // );
    }

    // public function create()
    // {
    //     return view('pages.customers.create'); 
    // }

    // public function store(CustomerRuest $request)
    // {
    //     if($request->has('btn-submit')){
    //         $data = $request->except(['_token', 'btn-submit']);
    //         Customers::create($data);

    //         return redirect()->route('customers')->with('message', 'Add customer success');      
    //     }
    //     return redirect()->route('customers'); 
    // }
    public function show_customer(Request $request){
        $customer['cus'] = DB::table('customer')->where('employee_id', Auth::id())->get();
        return view('pages.customers.show',$customer);
    }
    // public function add(Request $request){
    //     $customer['customer'] = DB::table('customer')->get();
    //     return view('pages.customers.add',$customer);
    // }
    public function addCustomer(Request $request){
        // echo 1;
        // {{$request->name}}
        
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
        
        $customer['customer'] = DB::table('customer')->paginate(5);
        return view('pages.customers.add',$customer);
        
    }
}

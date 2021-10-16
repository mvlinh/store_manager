<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRuest;
use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customers::select('id','name', 'phone', 'email', 'status','address', 'created_at', 'id_employee')
            ->paginate(5);

        return view('pages.customers.index',
            [
                'customer' => $customer
            ]
        );
    }

    public function create()
    {
        return view('pages.customers.create'); 
    }

    public function store(CustomerRuest $request)
    {
        if($request->has('btn-submit')){
            $data = $request->except(['_token', 'btn-submit']);
            Customers::create($data);

            return redirect()->route('customers')->with('message', 'Add customer success');      
        }
        return redirect()->route('customers'); 
    }
}

<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\CustomerRuest;
use App\Models\Customers;
use App\Models\detail_product_care;
use App\Models\follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CustomerDetailController extends Controller
{
    public function index(){
      
    }

    public function customer_detail($id){
        $customer['id'] = $id;
        $customer['detail'] = DB::table('customer')
                            ->join('employees', 'employees.id', '=', 'customer.id')
                            ->join('detailed_product_care', 'customer_id', '=', 'customer.id')
                            ->join('product', 'product.id', '=', 'product_id')
                            ->where('customer.id',$id)
                            ->select('customer.id as id','customer.name as customer_name','employees.name','product.name as product_name','product.id as product_id')
                            ->get();
        $product_care  = array();
        foreach($customer['detail'] as $product){
            array_push ($product_care, $product->product_id);
        }
        $customer['product_nocare'] = DB::table('product')
                            ->whereNotIn('id', $product_care)
                            ->get();
        $customer['product_care'] = DB::table('product')
                            ->whereIn('id', $product_care)
                            ->get();

        $customer['sold'] = DB::table('bill')
                            ->join('detailed_bill', 'bill_id', '=', 'bill.id')
                            ->join('product', 'product_id', '=', 'product.id')
                            ->where('bill.customer_id',$id)
                            ->select('product.name as name')
                            ->get();
        return view('pages.customers.detail',$customer);

    }
    public function add_product_care($cus_id,$pro_id){
        $product = new detail_product_care;
        $product->customer_id = $cus_id;
        $product->product_id = $pro_id;
        $product->save();
        return redirect()->route('customer_detail',['id'=>$cus_id]);
    } 
    public function del_product_care($cus_id,$pro_id){
        DB::table('detailed_product_care')
            ->where([
                ['customer_id', '=', $cus_id],
                ['product_id', '=', $pro_id]
            ])->delete();
        return redirect()->route('customer_detail',['id'=>$cus_id]);
    }
    public function show_info_care($id){
        $info = DB::table('follow')->where('customer_id',$id)->get();
        return response()->json($info);
    }
    public function add_info_follow(Request $request){
        
        $info = new follow;
        $info->emp_id = Auth::id();
        $info->customer_id = $request->id;
        $info->care_info = $request->info;
        $info->save();
        return response()->json([
            'emp_id' => Auth::id(),
            'info' => $request->info
        ]);
    }
}

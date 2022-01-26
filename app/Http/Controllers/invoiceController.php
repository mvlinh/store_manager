<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bill;
use App\Models\detailed_bill;
use App\Models\product;
use DB;
use App\Models\Customers;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class invoiceController extends Controller
{
    function invoice(){
        $product = new product;
        // echo $product::all();
        $customer['customer']= DB::table('customer')->get();
        $customer['products'] = DB::table('product')
                            ->get();
        $customer['product'] = DB::table('product')
        ->get();
        return view('pages.bill.invoice',$customer);
        // $bill = new bill;
    }
    function create_order(Request $request){
        $customer = DB::table('customer')
                        ->where('phone',$request['phone'])
                        ->first();
        if($request['products']['0'] == 0){
            return redirect()->route('invoice',['message_product'=>'Chưa có sản phẩm nào được chọn']);
        }
        else if($customer == null){
            return redirect()->route('invoice',['message_customer'=>'Khách hàng chưa tồn tại']);
        }
        else{
            $bill = new bill;
            $bill->emp_care_id = $customer->employee_id;
            $bill->emp_seller_id = Auth::id();
            $bill->customer_id = $customer->id;
            $bill->created_at =  Carbon::now();
            $bill->save();
            
            $id = DB::table('bill')->orderBy('id', 'desc')->first();
            for( $i = 0; $i < count($request['products']); $i++){
                $detailed_bill = new detailed_bill;
                $detailed_bill->bill_id = $id->id;
                $detailed_bill->product_id = $request['products'][$i];
                $detailed_bill->quantity = $request['quantities'][$i];
                $detailed_bill->created_at =  Carbon::now();
                $detailed_bill->save();
                $product[$i] = $customer = DB::table('product',)
                                ->where('id',$request['products'][$i])
                                ->get();
                $product[$i]['quantity'] = $request['quantities'][$i];
            }
                $bill['pro'] = $request['products'];
                $bill['customer'] =  DB::table('customer')
                                    ->where('phone',$request['phone'])
                                    ->first();
                $bill['i']  = $i;
                $bill['bill'] = DB::table('bill')->orderBy('id', 'desc')->first();
            return view('pages.bill.print',$bill,['product'=>$product]);
        }
    }
}

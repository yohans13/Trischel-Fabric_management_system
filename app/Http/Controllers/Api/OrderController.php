<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function todayorder(){


        $data = date('d/m/Y');
        
        $order=DB::table('orders')
            ->join('costomers','orders.customer_id','costomers.id')
            ->where('order_date',$data)
            ->select('costomers.name','orders.*')
            ->orderBy('orders.id','DESC')->get();
        
        return response()->json($order);

    }


    public function orderdetails($id)
    {
        $order = DB::table('orders')
             ->join('costomers','orders.customer_id','costomers.id')
             ->where('orders.id',$id)
             ->select('costomers.name','costomers.phone','costomers.address','orders.*')
             ->first();
             return response()->json($order);


        
    }

    public function orderDetailsAll($id)
    {
        $details = DB::table('order_details')
            ->join('products','order_details.product_id','products.id')
            ->where('order_details.order_id',$id)
            ->select('products.product_name','products.product_code','products.image','order_details.*')
            ->get();
            return response()->json($details);


    }
}

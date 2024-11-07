<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    function list(){
        return view("orders-list", ["orders" => Order::all()]);
    }

    function detail($id){
        return view("orders-detail", ["order" => Order::find($id)]);
    }

    function createForm(){
        return view("orders-create", ["customers" => Customer::all()]);
    }

    function create(Request $request){
        $numOrder = Order::last();
        if ($request->input("orderNumber") <= $numOrder->orderNumber){
            $order = new Order();
            $order->orderNumber = $request->input("orderNumber");
            $order->status = $request->input("status");
            $order->comments = $request->input("comments");
            $order->customerNumber = $request->input("customerNumber");
            $order->save();
            return redirect("/orders");
        }
        else {
            return redirect("/orders/create");
        }
        
    }
}

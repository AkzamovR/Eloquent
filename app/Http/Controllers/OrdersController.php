<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    function list(){
        return view("orders-list", ["orders" => Order::all()]);
    }

    function detail($id){
        return view("orders-detail", ["order" => Order::find($id)]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    function list(){
        return view("orders-list", ["orders" => Order::paginate(10)]);
    }

    function detail($id){
        return view("orders-detail", ["order" => Order::find($id)]);
    }

    function createForm(){
        return view("orders-create", ["customers" => Customer::all()]);
    }

    function create(Request $request){
        $numOrder = Order::where('orderNumber', '=', $request->input("orderNumber"))->first();
        if ($numOrder == NULL){
            $order = new Order();
            $order->orderNumber = $request->input("orderNumber");
            $order->status = $request->input("status");
            $order->orderDate = now();
            $order->requiredDate = now();
            $order->shippedDate = NULL;
            $order->comments = $request->input("comments");
            $order->customerNumber = $request->input("customerNumber");
            $order->save();

            // Récupérer le client 103
            $customer = Customer::find($request->input("customerNumber"));

            // Création d'un nouveau payments
            $payment = new Payment();
            $payment->checkNumber =$request->input('checkNumber');
            $payment->paymentDate = now();
            $payment->amount = $request->input('amount');

            // Ajouter le nouveau paiement au client 103
            $customer->payments()->save($payment);

            return redirect("/orders");
        }
        else {
            return redirect("/orders/create");
        }
        
    }

    
}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    
    public function list() {
        return view("customers-list", ["customers" => Customer::paginate(10)]);
    }

    function detail($id){

        $customer = Customer::find($id);

        return view("customers-detail", ["customer" => $customer]);
    }
}

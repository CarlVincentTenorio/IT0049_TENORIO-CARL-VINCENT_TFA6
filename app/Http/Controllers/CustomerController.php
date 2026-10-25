<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        // Retrieve customer records from the database
        $customers = Customer::all();

        // Pass records to the Blade view
        return view('customers', compact('customers'));
    }
}

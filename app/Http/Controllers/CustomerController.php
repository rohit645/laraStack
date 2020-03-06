<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = \App\Customer::all();
        // dd($customers);
        return view('customer.index', compact('customers'));
    }

    public function create(){
        return view('customer.create');
    }

    public function store(){
        $customers = request() ->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        
        \App\Customer::create($customers);
        return redirect('/customer');
    }

    public function show($customerId){
        $customer = \App\Customer::findorFail($customerId);

        return view('customer.show', compact('customer'));
    }

    public function edit($customer){
        return view('customer.edit', compact('App\Customer customer'));
        dd('hey');
    }
}

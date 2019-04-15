<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $results = Customer::all();
        return view('customer.index')->with('results', $results);
    }


    public function create()
    {
        return view('customer.create');

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:customers|max:50',
            'mobile' => 'required',
            'status' => 'required',
            'address' => 'required',
            'amount' => 'required',
        ]);

        $customer = new Customer();
        $customer->name =  $request->name;
        $customer->mobile =  $request->mobile;
        $customer->email =  $request->email;
        $customer->status =  $request->status;
        $customer->address =  $request->address;
        $customer->amount =  $request->amount;
        $customer->user_id =  1;
        $customer->save();

        return redirect('/customer');
    }


    public function show($id)
    {
        return view('customer.details');

    }


    public function edit($id)
    {
        return view('customer.edit');

    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

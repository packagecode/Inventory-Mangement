<?php

namespace App\Http\Controllers;

use App\ParceleseInvoice;
use Illuminate\Http\Request;

class ParceleseInvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('ParceleseInvoice.index');
    }

    public function create()
    {
        return view('ParceleseInvoice.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'invoice_no' => 'required|unique:parcelese_invoices',

        ]);

        $product = new product();
        $product->do_no =  $request->do_no;
        $product->invoice_no =  $request->invoice_no;
        $product->date =  $request->date;
        $product->parcelse_price =  $request->parcelse_price;
        $product->status =  $request->status;
        $product->profit =  $request->profit;

        $product->user_id =  1;
        $product->cat_id =  1;
        $product->supplier_id =  1;
        $product->save();

        return redirect('/product');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
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

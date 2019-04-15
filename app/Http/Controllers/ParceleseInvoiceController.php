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
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(ParceleseInvoice $parceleseInvoice)
    {
        //
    }


    public function edit(ParceleseInvoice $parceleseInvoice)
    {
        //
    }


    public function update(Request $request, ParceleseInvoice $parceleseInvoice)
    {
        //
    }


    public function destroy(ParceleseInvoice $parceleseInvoice)
    {
        //
    }
}

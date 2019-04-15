<?php

namespace App\Http\Controllers;

use App\Experses;
use Illuminate\Http\Request;

class ExpersesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $results = Experses::all();
        return view('experses.index')->with('results','$results');
    }

    public function create()
    {
        return view('experses.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request,$id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

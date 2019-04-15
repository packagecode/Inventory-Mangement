<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $results = Product::all();
        return view('product.index')->with('results', $results);
    }

    public function create()
    {
        return view('product.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|unique:products|max:35',
            'alart_qty' => 'required',
            'sell_price' => 'required',
            'parcelse_price' => 'required',
            'status' => 'required',

        ]);
        if($request->hasFile('picture')){
            // Get filename with the extension
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('picture')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('picture')->storeAs('public/picture', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $product = new product();
        $product->product_name =  $request->product_name;
        $product->alart_qty =  $request->alart_qty;
        $product->sell_price =  $request->sell_price;
        $product->parcelse_price =  $request->parcelse_price;
        $product->status =  $request->status;
        $product->profit =  $request->profit;
        $product->picture = $fileNameToStore;

        $product->user_id =  1;
        $product->cat_id =  1;
        $product->supplier_id =  1;
        $product->save();

        return redirect('/product');
    }


    public function show($id)
    {
        $result = product::find($id);
        return view('product.details')->with('result', $result);
    }


    public function edit($id)
    {
        $result = product::find($id);
        return view('product.edit')->with('result', $result);
    }


    public function update(Request $request, $id)
    {
        if($request->hasFile('picture')){
            // Get filename with the extension
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('picture')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('picture')->storeAs('public/picture', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $product = product::find($id);
        $product->product_name =  $request->product_name;
        $product->alart_qty =  $request->alart_qty;
        $product->sell_price =  $request->sell_price;
        $product->parcelse_price =  $request->parcelse_price;
        $product->status =  $request->status;
        $product->profit =  $request->profit;
        $product->picture = $fileNameToStore;

        $product->user_id =  1;
        $product->cat_id =  1;
        $product->supplier_id =  1;
        $product->save();

        return redirect('/product')->with('Success','Product Update');
    }

    public function destroy($id)
    {
        $result = product::find($id);
        $result->delete();
        return redirect('/product')->with('Success', 'Product Remove');
    }
}

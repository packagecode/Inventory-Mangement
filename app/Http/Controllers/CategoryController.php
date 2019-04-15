<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $results = Category::all();
        return view('category.index')->with('results', $results);
    }


    public function create()
    {
        return view('category.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:35',
            'label' => 'required',
            'status' => 'required'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->label = $request->label;
        $category->status = $request->status;
        $category->user_id = 1;
        $category->save();

        return redirect('/category');
    }


    public function show($id)
    {
        $result = Category::find($id);
        return view('category.details')->with('result', $result);
    }


    public function edit($id)
    {
        $result = Category::find($id);
        return view('category.edit')->with('result', $result);
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|max:35',
            'label' => 'required',
            'status' => 'required'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->label = $request->label;
        $category->status = $request->status;
        $category->user_id = 1;
        $category->save();

        return redirect('/category');
    }


    public function destroy($id)
    {
        $result = Category::find($id);
        $result->delete();
        return redirect('/category')->with('Success', 'Category Remove');

    }
}

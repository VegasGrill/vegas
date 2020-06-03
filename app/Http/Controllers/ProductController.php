<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{

    public function destroy($id)
    {
        $productdelete = Product::findOrFail($id);
        $productdelete->delete();
        return redirect('/products')->with('success', 'excruido djanho');
    }


    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'proname' => 'required|max:255',
            'procategory' => 'required',
            'provalue' => 'required|numeric',
        ]);
        Product::whereId($id)->update($validatedData);

        return redirect('/products')->with('success', 'editado caraio');
    }
    //
    public function edit($id){
        $productedit = Product::findOrFail($id);
        return view('edit', compact('productedit'));
    }

    public function index(){
        $productinsert = Product::all();
        return view('index', compact('productinsert'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'proname' => 'required|max:255',
            'procategory' => 'required',
            'provalue' => 'required|numeric',
            
        ]);
        $show = Product::create($validatedData);
        return redirect('/products')->with('success', 'Product is successfully saved');
    }

    public function create(){
        return view('create');
    }
}

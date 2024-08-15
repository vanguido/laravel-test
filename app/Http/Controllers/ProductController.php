<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'nullable|min:3',
            'price' => 'required|decimal:0,2|max:100', 
        ]);

        Product::create($request->input());

        return redirect()->route('products.index');
    }

    public function show(Product $product) { 

        return view('products.show', compact('product'));
    }

}

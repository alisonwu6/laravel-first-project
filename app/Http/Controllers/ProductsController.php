<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = "Welcome to Laravel Course!!!";
        $description = "Created by Alison";

        $data = [
            'productOne' => "iPhone",
            'productTwo' => "Samsung",
        ];
        
        
        // * compact method
        // return view('products.index', compact('title', 'description'));

        // * with method
        // return view('products.index')->with('title', $title);
        // return view('products.index')->with('data', $data);

        // * directly to the view
        return view('products.index', [
            'data' => $data,
            'title' => $title 
        ]);
    }
    public  function show($id) {
        $data = [
            'iPhone' => "iPhone",
            'samsung' => "samsung",
        ];

        return view('products.index', [
            'products' => $data[$id] ?? 'Product ' . $id .' does not exit.'
        ]);
    }
    public function about() {
        return 'products.about';
    }
}

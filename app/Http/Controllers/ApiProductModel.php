<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductModel extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $products=Product::all();
     return response()->json([
        'status'=>true,
        'prodducts'=>$products
     ]);
    }

    /**
     * Show the form for creating a new resource.
     * https://kinsta.com/es/blog/laravel-api/
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $product= Product::create($request->all());
        return response()->json([
            'status'=>true,
            'message'=>'producto añadido correctamente',
            'product'=>$product,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

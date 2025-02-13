<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
/**
* @OA\Info(title="API productos", version="1.0")
*
* @OA\Server(url="http://localhost:8000")
*/
class ApiProductModel extends Controller
{
    /**
     * Display a listing of the resource.
     */


/**
    * @OA\Get(
    *     path="/api/products",
    *     summary="Mostrar productos",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los productos."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */

    public function index()
    {
        $products = Product::all();
        return response()->json([
            'status' => true,
            'prodducts' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * https://kinsta.com/es/blog/laravel-api/
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'producto añadido correctamente',
            'product' => $product,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $found = Product::find($product->id);
        if ($found) {
            return response()->json([
                'status' => true,
                'message' => 'producto encontrado',
                'product' => $found
            ]);
        } else {

            return response()->json([
                'status' => true,
                'message' => 'producto no encontrado',
                'product' => null
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
    }
}

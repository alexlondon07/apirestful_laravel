<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if (!is_array($request->all())) {
          return ['error' => 'request must be an array'];
      }
      // Creamos las reglas de validación
      $rules = [
          'name'      => 'required',
          'code'  => 'required|code|unique:products,code'
          ];

      try {
          // Ejecutamos el validador y en caso de que falle devolvemos la respuesta
          $validator = \Validator::make($request->all(), $rules);
          if ($validator->fails()) {
              return [
                  'created' => false,
                  'errors'  => $validator->errors()->all()
              ];
          }

          Product::create($request->all());
          return ['created' => true];
      } catch (Exception $e) {
          \Log::info('Error creating product: '.$e);
          return \Response::json(['created' => false], 500);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Product $product)
     {
         return $product;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product = Product::find($id);
      $product->update($request->all());
      return ['updated' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Product::destroy($id);
      return ['deleted' => true];
    }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $products = Product::paginate(10); 
        return view('index', [
            'products' => $products
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'bodega' => 'required',
            'modelo' => 'required',
            'fecha' => 'required',
            'imagen'=> 'required'
        ]);
    
        $folder = 'Products';
        
        $path = $request->imagen->storePublicly('public/images');
        $path = str_replace('public','storage', $path);
        
        $product = Product::create([
            'bodega' => $request->input('bodega'),
            'modelo' => $request->input('modelo'),
            'fecha' => $request->input('fecha'),
            'imagen'=> $path
        ]);

        return view('indice');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::paginate(10); 
        return view('nuestrosvinos', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        
        $product->delete();

        return view('/indice');
    }
    public function upload(){
        if(\Input::hasFile('file')){
            echo "Uploaded";
            $file = \Input::file('file');
            $file->move('uploads');

        }
        
        
    }

}

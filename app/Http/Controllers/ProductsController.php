<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\ProductPatient;
use App\Models\Patient;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('products.index')->with([
            'products'=>products::get(),
            'authors'=>ProductPatient::get(),
            'patients'=>Patient::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  

        $request->validate([
            'id_workshop'=> 'required',
            'title'=>'required|max:255',
            'description' =>'max:1500',
            'id_patient'=>'required',
            'price' => 'required'
        ]);

        $data = $request->all();
        unset($data['_token']);
        
        //Store image in variable

        //Save image ui=in route

        //Save url in database
        unset($data['id_patient']);

        products::create($data);

        return view('products.index')->with(['products'=>products::get()]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        $request->validate([
            'title'=>'required|max:255',
            'description' =>'max:1500',
            'author'=>'required'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = products::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('status','El producto fue eliminado con exito');
    }
}

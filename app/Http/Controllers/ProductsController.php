<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\ProductPatient;
use App\Models\Patient;
use App\Models\Workshop;
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
            'patients'=>Patient::get(),
            'workshops'=>Workshop::get()
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
            'price' => 'required',

        ]);

        $data = $request->all();
        $patient = $data['id_patient'];

        if ($request->hasFile('image'))
        {
            $request->file('image')->store('public');
            $data['image'] = $request->file('image')->store('');
        }

        if ($request->hasFile('file'))
        {
            $request->file('file')->store('public');
            $data['file'] = $request->file('file')->store('');
        }

        products::create($data);

        //Obtain the last entry
        $lastProductId = products::latest()->first()->id;
        $patient = (int)$patient;
        $product_patient = array("id_product"=>$lastProductId, "id_patient"=>$patient);

        ProductPatient::create($product_patient);

        return redirect()->route('products.index')->with('status','Se creo el producto de manera exitosa!');

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = products::find($id);
        return view('products.edit')->with([
            'product'=>$product,
            'authors'=>ProductPatient::get(),
            'patients'=>Patient::get(),
            'workshops'=>Workshop::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|max:255',
            'description' =>'max:1500',
        ]);

        $data = $request->all();

        if ($request->hasFile('image'))
        {
            $request->file('image')->store('public');
            $data['image'] = $request->file('image')->store('');
        }else{
            $data['image'] = $request->image_aux;
        }

        $update = Products::find($id);
        $update->update($data);

        return redirect()->route('products.index')->with('status','Se edito correctamente el producto');


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

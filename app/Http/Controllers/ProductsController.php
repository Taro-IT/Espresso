<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\ProductPatient;
use App\Models\Patient;
use App\Models\Workshop;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    // MATRIZ DE TRAZABILIDAD DE REQUISITOS:
    //https://docs.google.com/spreadsheets/d/1dJc2e5C2nm2MUsvmy3gHFZHLYUieNLE-spPpbuIZyN8/edit#gid=1570316564

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     * ES-10 Yo como administrador quiero ver una lista de los productos digitales para ver las opciones de manejo de cada uno
     * ES-11 Yo como administrador quiero subir un producto digital para que los visitantes lo descarguen
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * ES-11 Yo como administrador quiero subir un producto digital para que los visitantes lo descarguen
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

        products::create($data);

        //Obtain the last entry
        $lastProductId = products::latest()->first()->id;
        $patient = (int)$patient;
        $product_patient = array("id_product"=>$lastProductId, "id_patient"=>$patient);

        ProductPatient::create($product_patient);

        $producto = products::find($lastProductId);
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageType = $image->getClientMimeType();
            $imageType = explode('/', $imageType);
            $imageType = $imageType[1];

            $randNum = mt_rand(100,999);
            $data['image'] = $request->file('image')->storeAs('storage/products/'.$lastProductId,'/image-'.$randNum.'.'.$imageType);
            $producto->image = 'storage/products/'.$lastProductId.'/image-'.$randNum.'.'.$imageType;

        }

        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            $fileType = $file->getClientMimeType();
            $fileType = explode('/', $fileType);
            $fileType = $fileType[1];

            $randNum = mt_rand(100,999);
            $data['file'] = $request->file('file')->storeAs('storage/products/'.$lastProductId,'/file-'.$randNum.'.'.$fileType);
            $producto->file = 'storage/products/'.$lastProductId.'/file-'.$randNum.'.'.$fileType;
        }

        $producto->save();
        return redirect()->route('products.index')->with('status', 'El producto ha sido registrado exitosamente');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     * ES-13 Yo como administrador quiero editar un producto digital para corregir sus datos
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
     * ES-13 Yo como administrador quiero editar un producto digital para corregir sus datos
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|max:255',
            'description' =>'max:1500',
        ]);

        $data = $request->all();

        $update = Products::find($id);
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageType = $image->getClientMimeType();
            $imageType = explode('/', $imageType);
            $imageType = $imageType[1];

            $randNum = mt_rand(100,999);
            $data['image'] = $request->file('image')->storeAs('storage/products/'.$id,'/image-'.$randNum.'.'.$imageType);
            $update->image = 'storage/products/'.$id.'/image-'.$randNum.'.'.$imageType;
        }else{
            $data['image'] = $request->image_aux;
        }

        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            $fileType = $file->getClientMimeType();
            $fileType = explode('/', $fileType);
            $fileType = $fileType[1];

            $randNum = mt_rand(100,999);
            $data['file'] = $request->file('file')->storeAs('storage/products/'.$id,'/file-'.$randNum.'.'.$fileType);
            $update->file = 'storage/products/'.$id.'/file-'.$randNum.'.'.$fileType;
        } else{
            $data['file'] = $request->file_aux;
        }

        $update->update($data);

        return redirect()->route('products.index')->with('status', 'El producto ha sido modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\RedirectResponse
     * ES-12 Yo como administrador quiero eliminar un producto digital para que ya no este disponible en la pagina
     */
    public function destroy($id)
    {
        $product = products::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('status', 'El producto ha sido eliminado exitosamente');
    }
}

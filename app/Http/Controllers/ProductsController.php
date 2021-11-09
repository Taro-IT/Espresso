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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
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
        return redirect()->route('products.index')->with('status','El producto ha sido creado de manera exitosa.');

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
        return redirect()->route('products.index')->with('status','El producto ha sido modificado de manera exitosa.');


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
        return redirect()->route('products.index')->with('status','El producto ha sido eliminado de manera exitosa.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
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
     * ES-17 Yo como administrador quiero subir una foto para que se muestre en el carrusel
     */
    public function index()
    {
        return view('images.index')->with(['images'=>Image::all()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * ES-17 Yo como administrador quiero subir una foto para que se muestre en el carrusel
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=> 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageType = $image->getClientMimeType();
            $imageType = explode('/', $imageType);
            $imageType = $imageType[1];

            $randNum = mt_rand(100,999);
            $request->file('image')->storeAs('storage/images/','/galery-'.$randNum.'.'.$imageType);
            $data['image'] = 'storage/images/galery-'.$randNum.'.'.$imageType;

        }

        Image::create($data);

        return redirect()->route('images.index')->with('status', 'La imagen ha sido registrada exitosamente');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\RedirectResponse
     * ES-18 Yo como administrador quiero borrar una foto para que se deje de mostrar en el carrusel
     */
    public function destroy($id)
    {
        $product = Image::find($id);
        $product->delete();
        return redirect()->route('images.index')->with('status', 'La imagen ha sido eliminada exitosamente');
    }
}

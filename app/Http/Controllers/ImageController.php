<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('images.index')->with(['images'=>Image::all()]);
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
     * @return \Illuminate\Http\RedirectResponse
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
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Image::find($id);
        $product->delete();
        return redirect()->route('images.index')->with('status', 'La imagen ha sido eliminada exitosamente');
    }
}

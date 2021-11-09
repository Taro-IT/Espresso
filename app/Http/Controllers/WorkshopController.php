<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('workshops.index')->with([
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
            'name'=>'required|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image'))
        {
            $request->file('image')->store('public');
            $data['image'] = $request->file('image')->store('');
        }

        Workshop::create($data);
        return redirect()->route('workshop.index')->with('status','Se agergo el taller de manera exitosa');


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
        return view('workshops.edit')->with(['workshop'=>Workshop::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image'))
        {
            $request->file('image')->store('public');
            $data['image'] = $request->file('image')->store('');
        }else{
            $data['image'] = $request->image_aux;
        }

        $update = Workshop::find($id);
        $update->update($data);

        return redirect()->route('workshop.index')->with('status','El taller ha sido modificado de manera exitosa.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workshop = Workshop::find($id);
        $workshop->delete();
        return redirect()->route('workshop.index')->with('status','El taller fue eliminado con exito');
    }

}

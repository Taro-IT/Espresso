<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Home;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    // MATRIZ DE TRAZABILIDAD DE REQUISITOS:
    //https://docs.google.com/spreadsheets/d/1dJc2e5C2nm2MUsvmy3gHFZHLYUieNLE-spPpbuIZyN8/edit#gid=1570316564

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * ES-8	Yo como visitante quiero hacer una donacion para apoyar a la casa Loohl
     */
    public function index(){

        $currencies = Currency::all();
        return view('donations.index')->with(['currencies'=>$currencies,'home'=>Home::get()->first()]);
    }
}

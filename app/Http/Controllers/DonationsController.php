<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Home;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    public function index(){

        $currencies = Currency::all();
        return view('donations.index')->with(['currencies'=>$currencies,'home'=>Home::get()->first()]);
    }
}

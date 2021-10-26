<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    public function index(){

        $currencies = Currency::all();
        return view('donations.index')->with(['currencies'=>$currencies]);
    }
}

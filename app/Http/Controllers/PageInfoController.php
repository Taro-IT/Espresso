<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageInfo;

class PageInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($url)
    {
        // Check the url & redirect to the page. 
        if($url == "que-hacemos"){
            return view('que_hacemos');
        }

        /*if($url == "quien-somos"){
            return view('quien_somos');
        }
        
        * Info Pages
        *
        *
        */

        return redirect("/");
    }


}

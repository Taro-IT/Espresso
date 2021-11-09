<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Home;
use App\Models\Patient;
use App\Models\ProductPatient;
use App\Models\products;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

        return redirect("/");
    }

    public function main()
    {

        // $post_ids = array(
        //     "https://www.facebook.com/permalink.php?story_fbid=1975493025939120&id=313251725496600",
        //     "https://www.facebook.com/permalink.php?story_fbid=1977799792375110&id=313251725496600",
        //     "https://www.facebook.com/permalink.php?story_fbid=1952226838265739&id=313251725496600"
        // );

        $base_url = "https://graph.facebook.com/v12.0/oembed_page";
        $casa_loohl_url = "https://www.facebook.com/Casa-de-Medio-Camino-Quer%C3%A9taro-Casa-Loohl-313251725496600/";

        // $posts = array();

        // foreach($post_ids as $post_id) {
        //     $response = Http::get(sprintf($base_url, $post_id), [
        //         'url' => $post_id,
        //         'access_token' => '272044211444955|J0Ms6aqX_UORBw1ODC4-QuR3iSA',
        //     ]);
        //     $data = json_decode($response);
        //     array_push($posts, $data->html);
        // }

        $response = Http::get($base_url, [
            'url' => $casa_loohl_url,
            'access_token' => '272044211444955|J0Ms6aqX_UORBw1ODC4-QuR3iSA',
            'maxwidth' => 1400,
            'maxheight' => 700,
            'adapt_container_width' => false
        ]);
        $data = json_decode($response);
        $fb_page = $data->html;

        return view('index')->with(['fb_page'=>$fb_page,'home'=>Home::get()->first()]);

    }

    public function getMediumPosts() {
        $response = Http::get('https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@sabesan96');
        $posts = json_decode($response);
        return response()->json($posts);
    }

    public function tienda(){

        return view('tienda')->with([
            'productos'=>Products::paginate(6),
            'authors'=>ProductPatient::get(),
            'patients'=>Patient::get(),
            'workshops'=>Workshop::get(),
            'currencies'=>Currency::all(),
        ]);
    }
    public function queHacemos(){
        $talleres = Workshop::all();

        return view('que_hacemos')->with([
            'talleres' => $talleres,
        ]);
    }

    public function download($id){
        $file = Products::find($id);
        return response()->download(public_path($file->file));
    }
}

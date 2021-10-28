<?php

namespace App\Http\Controllers;

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

        /*if($url == "quien-somos"){
            return view('quien_somos');
        }

        * Info Pages
        *
        *
        */

        return redirect("/");
    }

    public function main()
    {

        $post_ids = array(
            "https://www.facebook.com/permalink.php?story_fbid=1975493025939120&id=313251725496600",
            "https://www.facebook.com/permalink.php?story_fbid=1977799792375110&id=313251725496600",
            "https://www.facebook.com/permalink.php?story_fbid=1952226838265739&id=313251725496600"
        );

        $base_url = "https://graph.facebook.com/v12.0/oembed_post";

        $posts = array();

        foreach($post_ids as $post_id) {
            $response = Http::get(sprintf($base_url, $post_id), [
                'url' => $post_id,
                'access_token' => '272044211444955|J0Ms6aqX_UORBw1ODC4-QuR3iSA',
            ]);
            $data = json_decode($response);
            array_push($posts, $data->html);
        }

        return view('index')->with(['fb_posts'=>$posts]);

    }


}

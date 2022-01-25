<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Home;
use App\Models\Image;
use App\Models\Patient;
use App\Models\ProductPatient;
use App\Models\products;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use App\Models\PageInfo;

class PageInfoController extends Controller
{
    // MATRIZ DE TRAZABILIDAD DE REQUISITOS:
    //https://docs.google.com/spreadsheets/d/1dJc2e5C2nm2MUsvmy3gHFZHLYUieNLE-spPpbuIZyN8/edit#gid=1570316564

    /**
     * Display a listing of the resource.
     * @return Response
     * ES-1	Yo como visitante quiero ver información básica sobre la casa Loohl para conocerlos
     * ES-4	Yo como visitante quiero ver las últimas publicaciones de facebook para conocer sus actividades recientes
     * ES-5	Yo como visitante quiero abrir el chat de WhatsApp de la casa Loohl para ponerme en contacto con ellos
     */
    public function main()
    {
        $base_url = "https://graph.facebook.com/v12.0/oembed_page";
        $casa_loohl_url = "https://www.facebook.com/Casa-de-Medio-Camino-Quer%C3%A9taro-Casa-Loohl-313251725496600/";

        $response = Http::get($base_url, [
            'url' => $casa_loohl_url,
            'access_token' => '272044211444955|J0Ms6aqX_UORBw1ODC4-QuR3iSA',
            'maxwidth' => 1400,
            'maxheight' => 700,
            'adapt_container_width' => false
        ]);
        $data = json_decode($response);

        return view('index')->with([ 'home'=>Home::get()->first()]);
    }

    /**
     * Display a listing of the resource.
     * @return Response
     * ES-2 Yo como visitante quiero ver respuestas a preguntas frecuentes sobre la Casa Loohl para saberlas rapidamente
     */

    public function index($url)
    {
        // Check the url & redirect to the page.
        if($url == "que-hacemos"){
            return view('que_hacemos');
        }

        return redirect("/");
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     * ES-3 Yo como visitante quiero ver enlaces a los últimos artículos publicados en medium por la casa Loohl para leerlos en su página de medium
     */
    public function getMediumPosts() {
        $response = Http::get('https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@sabesan96');
        $posts = json_decode($response);
        return response()->json($posts);
    }

    public function puntosVenta() {
        return view('puntos_venta')->with([
            'home'=>Home::get()->first()
        ]);
    }

    public function quienesSomos() {
        return view('about_us')->with([
            'home'=>Home::get()->first(),
            'images' => Image::all(),
        ]);
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * ES-6	Yo como visitante quiero ver una lista de los productos digitales de la casa Loohl para conocerlos
     * ES-7	Yo como visitante quiero ver el detalle de un producto digital de la casa Loohl para conocer su historia
     * ES-9	Yo como visitante quiero comprar un producto digital para apoyar a la casa Loohl
     */
    public function tienda() {

        return view('tienda')->with([
            'productos'=>Products::paginate(6),
            'authors'=>ProductPatient::get(),
            'patients'=>Patient::get(),
            'workshops'=>Workshop::get(),
            'currencies'=>Currency::all(),
            'home'=>Home::get()->first()
        ]);
    }
    public function queHacemos(){
        $talleres = Workshop::all();

        return view('que_hacemos')->with([
            'talleres' => $talleres,
            'home'=>Home::get()->first()
        ]);
    }

    public function download($id){
        $product = Products::find($id);
        if($product != null && ($product->file) != null) {
            return response()->download(public_path($product->file));
        }
        else {
            return redirect()->route('donation.index')->with('error', 'Ocurrio un error al descargar el archivo');
        }
    }
}

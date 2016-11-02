<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\noticias;
use App\noticias_administrativas;

use App\User;

use Illuminate\Support\Facades\Storage;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $noticias = noticias::all();
        $usuarios = User::all();
        $noticias_admin = noticias_administrativas::all();

        return view('noticias.index', [
            'noticias' => $noticias,
            'usuarios' => $usuarios,
            'noticias_admin' => $noticias_admin,
        ]);
    }

    public function index_news(){
      return view('noticias.news', ['noticias' => noticias::all()]);
    }

    public function index_news_admin(){
      return view('noticias.news_admin', ['noticias' => noticias_administrativas::all()]);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $file_route = 'none';
        $img = $request->file('urlImg');
        if(isset($img)) {
            $file_route = time() . '_' . $img->getClientOriginalName();
            Storage::disk('imgNoticias')->put($file_route, file_get_contents($img->getRealPath()));
        }


        $request->user()->noticias()->create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $file_route,
        ]);

        return redirect('/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public static function new_noticias_administrativa($refugio_id, $subject, $description, $image){
      $noticia = new noticias_administrativas();
      $noticia->titulo =  $subject;
      $noticia->refugio_id = $refugio_id;
      $noticia->descripcion = $description;
      $noticia->imagen = $image;
      $noticia->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mascotas;
use Storage;

class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
          'nombre' => 'required',
          'raza' => 'required',
          'edad' => 'required|integer',
          'tamano' => 'required|numeric',
          //'img' => 'image|mimes:jpg,jpeg,png,gif'

        ]);
        $mascota = new Mascotas();
        $mascota->nombre = $request->nombre;
        $mascota->tipo = $request->input('tipo');
        $mascota->raza = $request->raza;
        $mascota->edad = $request->edad;
        $mascota->estado = "Sin apadrinar";
        $mascota->tamano = $request->tamano;

        //dd($request);
        $img = $request->file('img');
        if($img != null){
          $name = time() . '_' . $img->getClientOriginalName();
          Storage::disk('mascotas_pic')->put($name, file_get_contents($img->getRealPath()));
          $mascota->imagen = $name;
        }
        $mascota->save();
        return view("home");
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

    public function show_all()
    {
        //
        $mascotas = Mascotas::paginate(2);
        return view('animales.animales', ['mascotas' => $mascotas]);
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
        $mascota = Mascotas::find($id);
        return view('animales.addAnimales')->with(['mascota' => $mascota]);
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
      $this->validate($request, [
        'raza' => 'required',
        'edad' => 'required|integer',
        'tamano' => 'required|numeric',
        //'imagen' => 'image|mimes:jpg,jpeg,png,gif'

      ]);
      $mascota = Mascotas::find($id);
      $mascota->nombre = $request->nombre;
      $mascota->tipo = $request->input('tipo');
      $mascota->raza = $request->raza;
      $mascota->edad = $request->edad;
      $mascota->estado = $request->estado;
      $mascota->tamano = $request->tamano;
      $mascota->refugio_id = $request->refugio_id;

      //dd($request);
      $img = $request->file('img');
      if($img != null)
      {
        $name = time() . '_' . $request->img->getClientOriginalName();
        Storage::disk('mascotas_pic')->put($name, file_get_contents($img->getRealPath()));
        $mascota->imagen = $name;
      }

      $mascota->save();
      return view("home");
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
        Mascotas::destroy($id);
        return back();
    }
}

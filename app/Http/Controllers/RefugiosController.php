<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\refugios;
use Storage;

class RefugiosController extends Controller
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

     /*private funtion set_refugio(refugios $refugio, Request $request){
       $refugio->nombre = $request->nombre;
       $refugio->direccion = $request->direccion;
       $refugio->descripcion = $request->descripcion;
       $refugio->telefono = $request->telefono;
       $refugio->email = $request->email;

       $logo = $request->file('logo');
       if($logo != null){
         $name = time(). '_' . $logo->getClientOriginalName();
         Storage::disk('public')->put($name, file_get_contents($img->getRealPath()));
         $refugio->logo = $name;
       }
       $refugio->save();
     }*/

    public function store(Request $request)
    {
      $this->validate($request, [
        'nombre' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
      ]);

      dd($request);
/*      $refugio = new refugios();
//      $this->set_refugio($refugio, $request);
      $refugio->nombre = $request->nombre;
      $refugio->direccion = $request->direccion;
      $refugio->descripcion = $request->descripcion;
      $refugio->telefono = $request->telefono;
      $refugio->email = $request->email;

      $logo = $request->file('logo');
      if($logo != null){
        $name = time(). '_' . $logo->getClientOriginalName();
        Storage::disk('public')->put($name, file_get_contents($logo->getRealPath()));
        $refugio->logo = $name;
      }
      $refugio->save();

      return view('home');*/
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

    public function show_all(){
      return view('refugios.refugios')->with(['refugios' => refugios::all() ]);
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
      $this->validate($request, [
        'nombre' => 'require',
        'direccion' => 'require',
        'telefono' => 'require',
        'email' => 'require|email',
      ]);

      $refugio = refugios::find($id);
      //$this->set_refugio($refugio, $request);

      $refugio->nombre = $request->nombre;
      $refugio->direccion = $request->direccion;
      $refugio->descripcion = $request->descripcion;
      $refugio->telefono = $request->telefono;
      $refugio->email = $request->email;

      $logo = $request->file('logo');
      if($logo != null){
        $name = time(). '_' . $logo->getClientOriginalName();
        Storage::disk('public')->put($name, file_get_contents($img->getRealPath()));
        $refugio->logo = $name;
      }
      $refugio->save();
      return view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        refugios::destroy($id);
        return back();
    }
}

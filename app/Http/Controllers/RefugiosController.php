<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Refugio;
use App\User;
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

//      dd($request);
      $refugio = new Refugio();
//      $this->set_refugio($refugio, $request);
      $refugio->nombre = $request->nombre;
      $refugio->direccion = $request->direccion;
      $refugio->descripcion = $request->descripcion;
      $refugio->telefono = $request->telefono;
      $refugio->email = $request->email;
      $user = user::find($request->user_id);

      $logo = $request->file('logo');
      if($logo != null){
        $name = time(). '_' . $logo->getClientOriginalName();
        Storage::disk('refugios_pic')->put($name, file_get_contents($logo->getRealPath()));
        $refugio->logo = $name;
      }
      $refugio->save();
      $user->refugio_id = $refugio->id;
      $user->save();
      return view('home');
    }

    public function store_refugio(Request $request)
    {
      $this->validate($request, [
        'nombre' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed',
        //'password-confirmation' => 'required'
      ]);

      $user = new User();

      $user->name = $request->nombre;
      $user->apellidos = $request->nombre;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);

//      dd($user);
      $refugio = new Refugio();
//      $this->set_refugio($refugio, $request);
      $refugio->nombre = $request->nombre;
      $refugio->direccion = $request->direccion;
      $refugio->descripcion = $request->descripcion;
      $refugio->telefono = $request->telefono;
      $refugio->email = $request->email;
      $refugio->paypal = $request->paypal;


      $logo = $request->file('logo');
      if($logo != null){
        $name = time(). '_' . $logo->getClientOriginalName();
        Storage::disk('refugios_pic')->put($name, file_get_contents($logo->getRealPath()));
        $refugio->logo = $name;
      }
      $refugio->save();
      $user->refugio_id = $refugio->id;
      $user->is_admin = true;
      $user->save();
      return view('home');
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
      return view('refugios.refugios')->with(['refugios' => Refugio::all() ]);
    }

    public function show_all_refugio(){
      $refugio = Refugio::find(Auth::user()->refugio_id);
      return view('animales.administracion_animales')->with(['refugio' => $refugio ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $refugio = Refugio::find($id);
        return view('refugios.add_modify_refugio')->with(['refugio' => $refugio]);
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
        'nombre' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
      ]);

      $refugio = Refugio::find($id);
      //$this->set_refugio($refugio, $request);

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
      return view('home');
    }

    public function update_admin(Request $request)
    {
      $this->validate($request, [
        'nombre' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
        'password' => 'min:6|confirmed',
        //'password-confirmation' => 'required'
      ]);

      $user = Auth::user();

      $user->name = $request->nombre;
      $user->apellidos = $request->nombre;
      $user->email = $request->email;
      $user->password =  isset($request->password) || empty($request->password) ? $user->password : bcrypt($request->password);
      $user->save();

//      dd($user);
      $refugio = Refugio::find($user->refugio_id);
      $refugio->nombre = $request->nombre;
      $refugio->direccion = $request->direccion;
      $refugio->descripcion = $request->descripcion;
      $refugio->telefono = $request->telefono;
      $refugio->email = $request->email;

      $logo = $request->file('logo');
      if($logo != null){
        $name = time(). '_' . $logo->getClientOriginalName();
        Storage::disk('refugios_pic')->put($name, file_get_contents($logo->getRealPath()));
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
        Refugio::destroy($id);
        return back();
    }
}

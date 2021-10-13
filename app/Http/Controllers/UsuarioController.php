<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;


class UsuarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
       
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios =  Usuario::all();
        return view('Usuario.index')->with('usuarios',$usuarios);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $usuarios = Usuario::create(['nombre_local' => $request->nombre_local,
        'tipo_de_negocio' => $request->tipo_de_negocio,
        'categoria' => $request->categoria,
        'sucursales' => $request->sucursales,
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'telefono' => $request->telefono,
        'email' => $request->email,
        'password' => $request->password,
        'direccion_local' => $request->direccion_local,
        'ref' => $request->ref,
    ]);
        

        $usuarios->save();
        //$usuarios->destroy();//

        return redirect('/usuarios');
        
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios =  Usuario::find($id);
        return view('usuario.edit')->with('usuarios', $usuarios);
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
        $usuarios = Usuario::find($id);
        $usuarios->nombre_local = $request->get('nombre_local');
        $usuarios->tipo_de_negocio = $request->get('tipo_de_negocio');
        $usuarios->categoria = $request->get('categoria');
        $usuarios->sucursales = $request->get('sucursales');
        $usuarios->nombre = $request->get('nombre');
        $usuarios->apellido = $request->get('apellido');
        $usuarios->telefono = $request->get('telefono');
        $usuarios->email = $request->get('email');
        $usuarios->password = $request->get('password');
        $usuarios->direccion_local = $request->get('direccion_local');
        $usuarios->ref = $request->get('ref');

        $usuarios->save();
        $usuarios->destroy();
        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = Usuario::find($id);
        $usuarios->delete();
      
        return redirect('/usuarios');
    }
    
}

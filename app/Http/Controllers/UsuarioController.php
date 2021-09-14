<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


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
        $usuarios = new Usuario();
        $usuarios->codigo = $request->get('codigo');
        $usuarios->descripcion = $request->get('descripcion');
        $usuarios->cantidad = $request->get('cantidad');
        $usuarios->precio = $request->get('precio');

        $usuarios->save();

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
        $usuarios->codigo = $request->get('codigo');
        $usuarios->descripcion = $request->get('descripcion');
        $usuarios->cantidad = $request->get('cantidad');
        $usuarios->precio = $request->get('precio');

        $usuarios->save();

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

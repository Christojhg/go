<?php

namespace App\Http\Controllers;
use App\Curso;
use App\Categoria;
use App\Empresa;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos=Curso::all();
        return view('backend.cursos.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categoria::all();
        $empresas=Empresa::all();
        return view('backend.cursos.create',compact('categorias','empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('imagen');
        // return $request->get('imagen');
        //obtenemos el nombre del archivo
        $nombre =  time()."_".$file->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('cursos')->put($nombre,  \File::get($file));

        $curso=new Curso;
        $curso->nombre=$request->get('nombre');
        $curso->descripcion=$request->get('descripcion');
        $curso->imagen=$nombre;
        $curso->git=$request->get('git');
        $curso->categoria_id=$request->get('categoria');
        $curso->empresa_id=$request->get('empresa');
        $curso->estado=1;
        $curso->save();
        return redirect()->route('cursos.index');
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
        $categorias=Categoria::all();
        $empresas=Empresa::all();
        $curso=Curso::find($id);
        return view('backend.cursos.edit',compact('categorias','empresas','curso'));
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
        $file = $request->file('imagen');
        // return $request->get('imagen');
        //obtenemos el nombre del archivo
        $nombre =  time()."_".$file->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('cursos')->put($nombre,  \File::get($file));


        $curso=Curso::find($id);
        $curso->nombre=$request->get('nombre');
        $curso->descripcion=$request->get('descripcion');
        $curso->imagen=$nombre;
        $curso->git=$request->get('git');
        $curso->categoria_id=$request->get('categoria');
        $curso->empresa_id=$request->get('empresa');
        $curso->estado=$request->get('empresa');
        $curso->save();
        return redirect()->route('cursos.index');
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

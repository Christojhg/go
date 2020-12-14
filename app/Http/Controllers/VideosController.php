<?php

namespace App\Http\Controllers;
use App\Video;
use App\Curso;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos=Video::all();
        return view('backend.videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos=Curso::all();
        $videos=Video::all();
        return view('backend.videos.create',compact('cursos','videos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_curso=$request->get('curso');
        $buscador_orden=Video::where('curso_id',$id_curso)->get();
        if($buscador_orden){
            $cantidad=count($buscador_orden);
            $id_orden=$cantidad;
        }else{
            $id_orden=0;
        }

        $video=new video;
        $video->nombre=$request->get('nombre');
        $video->descripcion=$request->get('descripcion');
        $video->url=$request->get('url');
        $video->visto=0;
        $video->orden=$id_orden;
        $video->estado=1;
        $video->curso_id=$id_curso;
        $video->save();
        return redirect()->route('videos.index');
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
        $cursos=Curso::all();
        $video=Video::find($id);
        $videos_total=Video::all();
        return view('backend.videos.edit',compact('cursos','video','videos_total'));
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
        $video=video::find($id);
        $video->nombre=$request->get('nombre');
        $video->descripcion=$request->get('descripcion');
        $video->url=$request->get('url');
        $video->visto=$request->get('visto');
        $video->orden=$request->get('orden');
        $video->estado=$request->get('estado');
        $video->curso_id=$request->get('curso');
        $video->save();
        return redirect()->route('videos.index');
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

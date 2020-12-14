<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Curso;
use App\Empresa;
use App\Video;
// use App\User;


class PagesController extends Controller
{
    public function index(){
        $categorias=Categoria::all();
        $empresas=Empresa::all();
        $cursos=Curso::all();
        // $random=Curso::all()->random(1)->first();
        return view('frontend.inicio.index',compact('categorias','empresas','cursos'));
    }

    public function cursos(){
        $cursos=Curso::all();
        $cantidad_cursos=count($cursos);

        $videos=Video::all();
        $cantidad_videos=count($videos);

        $cursos_t=Curso::paginate(4);
        // return $cursos_t;
        return view('frontend.cursos.index',compact('cursos_t','cantidad_cursos','cantidad_videos'));
    }

    public function biblioteca(){
        $cursos=Curso::all();
        return view('frontend.biblioteca.index',compact('cursos'));
    }

    public function ver(){
        $categorias=Categoria::all();
        $empresas=Empresa::all();
        $curso=Curso::all();
        return view('frontend.vista.index',compact('categorias','empresas'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Curso;
use App\Models\Aula;
use App\User;

class CursoController extends Controller
{

    public function index()
    {
        return view('admin.aula.index');
    }
    public function store(Request $request)
    {
        
        $curso               = new Curso;
        $curso->name         =    ucwords($request->nombreCurso);
        $curso->slug         =   Str::slug($request->nombreCurso);
        $curso->token_key    =    Str::random(8);
        $curso->save();

        # Asignamos el curso al aula
        $aula = Aula::find($request->aula);
        $aula->cursos()->attach([$curso->id]);

        # Asignamos el usuario al curso
        $user = User::find(Auth::user()->id);
        $user->cursos()->attach([$curso->id]);


        return  redirect()->route('curso.show',$curso->id)->with('success','Curso creado satisfactoriamente.');
    }
     public function create()
    {
        return view('admin.curso.create');
    }
    public function show($id)
    {
        
        $curso = Curso::find($id);

        return view('admin.curso.show',compact('curso'));
    }

}

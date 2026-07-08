<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Actividad;
use Illuminate\Support\Str;

class ActividadController extends Controller
{
   	public function index(){
   		$cursos = Curso::all();
        $actividades = Actividad::with('cursos')->orderBy('created_at', 'desc')->get();

   		return view('admin.actividad.index',compact('cursos', 'actividades'));
   	}

   	public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'curso' => 'required|exists:cursos,id'
        ]);

        $actividad = Actividad::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        $actividad->cursos()->attach($request->curso);

        return redirect()->route('actividad.index')->with('status_success', 'Actividad creada con éxito');
   	}
}

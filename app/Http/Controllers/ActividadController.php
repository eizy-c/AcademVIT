<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Curso;

class ActividadController extends Controller
{
   	public function index(){
   		$cursos = Curso::all();

   		return view('admin.actividad.index',compact('cursos'));
   	}

   	public function store(request $request){

   	}
}

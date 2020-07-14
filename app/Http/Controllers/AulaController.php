<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Aula;
use App\User;
class AulaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $data['aulas'] = $user->aulas;
        return view('admin.aula.index', $data);
    }

     public function create(){
        return view('admin.aula.create');
    }

    public function store(Request $request){

        $aula               = new Aula;
        $aula->name         = ucwords($request->nombreAula);
        $aula->slug         = Str::slug($request->nombreAula);
        $aula->save();

        # Asignamos el usuario al aula
        $user = User::find(Auth::user()->id);
        $user->aulas()->attach([$aula->id]);

        return redirect()->route('aula.index')->with('success','Aula creada satisfactoriamente.');
    }

    public function show(Aula $aula){
        
        $cursos = $aula->cursos;


        return view('admin.aula.show', compact('cursos','aula'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Curso;
use App\Models\Aula;
use App\User;
use App\Http\Requests\StoreCursoRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        return view('admin.aula.index');
    }

    public function store(StoreCursoRequest $request): RedirectResponse
    {
        $curso = new Curso;
        $curso->name = ucwords($request->validated()['nombreCurso']);
        $curso->slug = Str::slug($request->validated()['nombreCurso']);
        $curso->token_key = Str::random(8);
        $curso->save();

        # Asignamos el curso al aula
        $aula = Aula::find($request->validated()['aula']);
        $aula->cursos()->attach([$curso->id]);

        # Asignamos el usuario al curso
        $user = User::find(Auth::user()->id);
        $user->cursos()->attach([$curso->id]);

        return redirect()->route('curso.show', $curso->id)->with('success', 'Curso creado satisfactoriamente.');
    }

    public function create(): View
    {
        return view('admin.curso.create');
    }

    public function show($id): View
    {
        $curso = Curso::find($id);
        return view('admin.curso.show', compact('curso'));
    }
}

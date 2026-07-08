<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Aula;
use App\User;
use App\Http\Requests\StoreAulaRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AulaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(): View
    {
        $user = User::find(Auth::user()->id);
        $data['aulas'] = $user->aulas;
        return view('admin.aula.index', $data);
    }

    public function create(): View
    {
        return view('admin.aula.create');
    }

    public function store(StoreAulaRequest $request): RedirectResponse
    {
        $aula = new Aula;
        $aula->name = ucwords($request->validated()['nombreAula']);
        $aula->slug = Str::slug($request->validated()['nombreAula']);
        $aula->save();

        # Asignamos el usuario al aula
        $user = User::find(Auth::user()->id);
        $user->aulas()->attach([$aula->id]);

        return redirect()->route('aula.index')->with('success', 'Aula creada satisfactoriamente.');
    }

    public function show(Aula $aula): View
    {
        $cursos = $aula->cursos;
        return view('admin.aula.show', compact('cursos', 'aula'));
    }
}

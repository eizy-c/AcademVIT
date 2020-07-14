@extends('inc.app')
@section('title' ,' | '.$aula->name)
@section('contenido')
  <div class="container-fluid mt-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h3 class=" mb-0 text-gray-800">{{ $aula->name}} <small>/Cursos</small></h3>
      <div class="d-inline-block">
        <a  href="#"  data-toggle="modal" data-target="#nuevoCurso" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-lg text-white"></i> Nuevo curso</a>

    <a  href="Institucion.html" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-cog fa-lg text-white"></i> Administración</a>
      </div>
      
    </div>
    <!-- Content Row -->
    <div class="row">

     @foreach($cursos as $curso)
      <div class="col-xl-3 col-md-6 mb-4">
        <a class="text-gray-700" href="{{route('curso.show',$curso->id )}}">
          <div class="card h-100 ">
            <img src="{{ asset('img/curso.png') }}" class="card-img-top d-none d-sm-block">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">{{$curso->name}}</div>
                  <div class="h6 mb-0 text-gray-500">
                    <small class="font-weight-bold mr-5"><span class="fa fa-user-graduate"></span> 0</small>
                    <small class="font-weight-bold"><span class="fa fa-user-tie"></span> 0</small>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-chalkboard fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
@include('inc.modal.addcurso')
@endsection
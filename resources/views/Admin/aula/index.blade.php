@extends('inc.app')
@section('title' ,'| Aulas')
@section('contenido')
	<div class="container-fluid mt-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <div class="d-inline">
        <h1 class="h3 mb-0 text-gray-800">Aulas</h1>
      </div>
      <div class="d-inline">
        <a  href="#" data-toggle="modal" data-target="#addAula" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-lg text-white"></i> Nueva aula</a>
      </div>
    </div>
    <div class="row">
       @foreach($aulas as $aula)
      <div class="col-xl-3 col-md-6 mb-4">
        <a class="text-gray-700" href="{{route('aula.show',$aula->id)}}">
          <div class="card h-100 ">
            <img src="{{ asset('img/aula.png') }}" class="card-img-top d-none d-sm-block">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                    {{ $aula->name }}
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

@include('inc.modal.addAula')
@endsection

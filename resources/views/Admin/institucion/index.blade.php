@extends('inc.app')
@section('title' ,'')
@section('contenido')
	<div class="container-fluid ">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Instituciones</h1>
        <div class="d-none  d-sm-inline-block">
          <a  href="Institucion.html" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-lg text-white"></i> Nueva institucion</a>
        </div>
      </div>
      
      <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
          <a class="text-gray-700" href="{{route('aula.index')}}">
            <div class="card h-100 ">
              <img src="{{ asset('img/centro.png') }}" class="card-img-top">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">centro educativo</div>
                    <div class="h6 mb-0 text-gray-500">
                      <small class="font-weight-bold mr-5"><span class="fa fa-chalkboard"></span> 0</small>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-university fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>

@endsection
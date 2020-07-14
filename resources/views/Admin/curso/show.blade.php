@extends('inc.app')
@section('title' ,'| '.$curso->name)
@section('contenido')

<div class="container-fluid mt-4">
  <div class="row">

    <div class="col-md-12 mb-3">
    <div class="card h-100 banner-curso position-relative">
      <div class="position-absolute">
        <div class="dropdown no-arrow edit-banner float-right">
          <!-- boton para editar banner -->
          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Opciones:</div>
            <a class="dropdown-item" href="#">Crear actividad</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Adjuntar recurso</a>
          </div>
        </div>
      </div>
      <!-- banner del curso -->
      <div class=" title-curso position-absolute text-white mt-md-5 ml-md-5 mt-sm-3 ml-sm-3" > 
        <div class="font-weight-bold nombre-curso text-uppercase">{{ $curso->name }}</div>
        Código: 
        <div class="small codigo-curso d-inline" id="copiar-text">{{ $curso->token_key}} </div>
        <i class="far fa-copy ml-3" id="copiar"></i>
      </div>
      <img src="{{ asset('img/banner.png') }}" class="card-img-top">
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-md-4">
       <div class="card mb-3">
        <div class="card-body text-dark">
          <h5 class="card-title font-weight-bold">Actividades pendientes</h5>
          <p class="card-text">No tienes actividades pendientes para esta semana</p>
        </div>
        <div class="card-footer"><a href="#" class="float-right">Ver más</a></div>
       </div>
    </div>

    <div class="col-md-8">
      <div class="card shadow mb-3">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"> </h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Opciones:</div>
                      <a class="dropdown-item" href="#">Crear actividad</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Adjuntar recurso</a>
                    </div>
                  </div>
                </div>
              </div>
    </div>
    
  </div>
</div>

@endsection
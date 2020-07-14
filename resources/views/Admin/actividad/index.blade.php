@extends('inc.app')
@section('title' ,'| Actividades')
@section('contenido')
	<div class="container-fluid ">
    <div class="row">
      <div class="col-md-12">
        <a href="#" > 
          <div class="jumbo jumbotron-fluid" id="addActividad">
              <div class="container text-center ">
                <h4 class="font-weight-bold">Agregar nueva actividad</h4>
              </div>
          </div>
        </a>
        <div class="card mb-3" id="formAddActividad">
          <div class="card-body">
            <form method="POST" action="{{route('actividad.store' )}}" >
              @csrf
              <div class="form-group input-field">
                <label for="inputAddress">Nombre de la actividad</label>
                <input type="text" class="form-control" name="name" id="inputAddress">
              </div>
              <div class="form-group">
                <label for="curso">Curso</label>
                <select class="form-control" id="curso" name="curso">
                  <option>Seleccione el curso</option>
                  @foreach($cursos as $curso)
                  <option>{{ $curso->name }} - {{ $curso->name }}</option>
                  @endforeach
                </select>
              </div>
              <button type="submit" class="btn btn-success float-right">Guardar</button>
              <button type="button" class="btn btn-secondary float-right" id="cancelActividad">Cancelar</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card shadow mb-3">
          <!-- Card Header - Dropdown -->
          <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
            <a class="text-gray-700" data-toggle="collapse" href="#collapseActividad" role="button" aria-expanded="false" aria-controls="collapseActividad">
              <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                Nombre actividad
              </div>
            </a>
            <small class="text-muted">Hace 3 mins</small>
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Opciones:</div>
                <a class="dropdown-item" href="#">Modificar</a>
                <a class="dropdown-item" href="#">Eliminar</a>
              </div>
            </div>
          </div>
          <div class="collapse" id="collapseActividad">
            <div class="card-body">
              <p class="card-text">- Evaluacion.</p>
              <p class="card-text">- Recurso.</p>
              <p class="card-text">- Ponderación.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('inc.modal.addActividad')
@endsection
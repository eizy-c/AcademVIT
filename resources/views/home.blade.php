@extends('inc.app-home')
@section('contenido')
    <div class="container-fluid" id="content-login">
      <div class="row mt-5">
        <div class="col-md-6 text-center mb-2 d-none d-md-block">
          <h1 class="login-text">ACADEMVIT</h1>
          <img src="{{ asset('img/logo.png') }}" class="w-25">
        </div>
        <div class="col-md-6">
          <div class="card card-login  form-login text-center">
            <div class="card-header">
              <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-institucion-tab" data-toggle="pill" href="#pills-institucion" role="tab" aria-controls="pills-institucion" aria-selected="true">Aula</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profesor-tab" data-toggle="pill" href="#pills-profesor" role="tab" aria-controls="pills-profesor" aria-selected="false">Profesor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-estudiante-tab" data-toggle="pill" href="#pills-estudiante" role="tab" aria-controls="pills-estudiante" aria-selected="false">Estudiante</a>
                </li>
              </ul>
            </div>
            <div class="card-body pt-5">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-institucion" role="tabpanel" aria-labelledby="pills-institucion-tab">
                  <h5 class="card-title">¿No Tienes un aula?</h5>
                  <p class="card-text">¡Crea tu aula virtual en un minuto y logra una mayor experiencia con tus estudiantes!</p>
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#registrar">¡Registrate!</a>
                </div>
                <div class="tab-pane fade" id="pills-profesor" role="tabpanel" aria-labelledby="pills-profesor-tab">
                  <h5 class="card-title">¿Eres profesor?</h5>
                  <p class="card-text">Publica tus avisos, tareas, pruebas y debates, y comparte archivos con tus estudiantes.</p>
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#loginProfesor">Registrate</a>
                </div>
                <div class="tab-pane fade" id="pills-estudiante" role="tabpanel" aria-labelledby="pills-estudiante-tab">
                  <h5 class="card-title">¿Eres estudiante?</h5>
                  <p class="card-text">Conectate a tus cursos e interactuá y comparte experiencias con otros estudiantes.</p>
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#loginEstudiante">Registrate</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
@include('about')

@endsection

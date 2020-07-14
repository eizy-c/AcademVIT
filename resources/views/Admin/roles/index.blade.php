@extends('inc.app')
@section('title' ,'| Roles')
@section('contenido')
  <div class="container-fluid mt-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <div class="d-inline">
        <h1 class="h3 mb-0 text-gray-800">Roles</h1>
      </div>
      <div class="d-inline">
        <a  href="#" data-toggle="modal" data-target="#addRole" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-lg text-white"></i> Nuevo</a>
      </div>
    </div>
    
    <div class="row">
      @foreach($roles as $role)
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-3">
          <!-- Card Header - Dropdown -->
          <div class="card-header bg-white py-3 d-flex flex-row align-items-center justify-content-between">
          <a class="text-gray-700" href="{{route('role.show',$role->id)}}">
            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
              {{ $role->name }}
            </div>
          </a>
            @can('haveaccess','role.edit')
            <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Opciones:</div>
                @can('haveaccess','role.edit')
                <a class="dropdown-item" href="{{route('role.edit',$role->id)}}">Editar</a>
                @endcan
                <div class="dropdown-divider"></div>
                @can('haveaccess','role.destroy')
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#removeRole{{ $role->id}}">Eliminar</a>
                @endcan
              </div>
            </div>
            @endcan
          </div>
        </div>
      </div>
      @include('inc.modal.removeRole')
      @endforeach
    </div>
  </div>

@include('admin.roles.create')
@endsection

@extends('inc.app')
@section('title' ,'| Editar role')
@section('contenido')
  <div class="container-fluid mt-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <div class="d-inline">
        <h1 class="h3 mb-0 text-gray-800">Editar role</h1>
      </div>
    </div>
    
    <div class="row">
       <div class="col-lg-12 card">
       	<form method="POST" action="{{route('role.update', $role->id)}}" >
				@csrf
        @method('PUT')
			  <div class="container-fluid">
			    <div class="row px-3 py-4">
			      	<div class="col-md-6 col-sm-12 mb-3">
	              <div class="form-group">                            
	                <input type="text" class="form-control"  id="name"  placeholder="Nombre" name="name" value="{{ old('name', $role->name)}}"
	                  >
	              </div>
	              <div class="form-group">                            
	                <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="{{ old('slug', $role->slug)}}"
	                  >
	              </div>
								<hr>
	              <div class="text-center">
	               	<h3>Acceso total</h3>
									<div class="custom-control custom-radio custom-control-inline">
	                  <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
	                  @if ( $role['full-access']=="yes") 
                      checked 
                    @elseif (old('full-access')=="yes") 
                      checked 
                    @endif
                    >

	                  <label class="custom-control-label" for="fullaccessyes">Si</label>
	                </div>
	                <div class="custom-control custom-radio custom-control-inline">
	                  <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" 

                    @if ( $role['full-access']=="no") 
                      checked 
                    @elseif (old('full-access')=="no") 
                      checked 
                    @endif
	                  >
	                  <label class="custom-control-label" for="fullaccessno">No</label>
	                </div>
	              </div>
			      	</div>
				      <div class="col-md-6 col-sm-12 mb-3">
				      	@foreach($permissions as $permission)
				      	<div class="custom-control custom-switch">
								  <input type="checkbox" class="custom-control-input" 
								  		id="permission_{{$permission->id}}"
                      value="{{$permission->id}}"
                      name="permission[]"

											@if( is_array(old('permission')) && in_array("$permission->id", old('permission')))
                        checked
                      @elseif( is_array($permission_role) && in_array("$permission->id", $permission_role))
                        checked
                      @endif
                  >
								  <label class="custom-control-label pointer" for="permission_{{$permission->id}}"> - <b>{{ $permission->name }}</b> <small>({{ $permission->description }} )</small> </label>
								</div>
								@endforeach
				      </div>
			    	</div>
		      	<div class="float-right mb-3">
							<button type="submit" class="btn btn-success float-right">Guardar</button>
					<a href="{{route('role.index')}}" class="btn btn-secondary float-right" data-dismiss="modal">Regresar</a>
		      	</div>
			  </div>
      </form>
       </div>
    </div>
  </div>
@endsection

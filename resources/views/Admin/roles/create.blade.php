<div class="modal fade" id="addRole" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered " role="document">
		<div class="modal-content p-0">
		  <form method="POST" action="{{route('role.store' )}}" >
			  <div class="container-fluid">
			    <div class="row px-3 py-4">
							@csrf
			      	<div class="col-md-6 col-sm-12 mb-3">
	              <div class="form-group">                            
	                <input type="text" class="form-control"  id="name"  placeholder="Nombre" name="name" value="{{ old('name')}}"
	                  >
	              </div>
	              <div class="form-group">                            
	                <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="{{ old('slug')}}"
	                  >
	              </div>
								<hr>
	              <div class="text-center">
	               	<h3>Acceso total</h3>
									<div class="custom-control custom-radio custom-control-inline">
	                  <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
	                  	@if (old('full-access')=="yes") checked @endif >
	                  <label class="custom-control-label" for="fullaccessyes">Si</label>
	                </div>
	                <div class="custom-control custom-radio custom-control-inline">
	                  <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" 
	                  @if (old('full-access')=="no") checked @endif
	                  @if (old('full-access')===null) checked @endif
	                  >
	                  <label class="custom-control-label" for="fullaccessno">No</label>
	                </div>
	              </div>
			      	</div>
				      <div class="col-md-6 col-sm-12 mb-3">
				      	@foreach($permissions as $permission)
				      	<div class="custom-control custom-switch">
								  <input type="checkbox" class="custom-control-input" id="permission_{{$permission->id}}" value="{{$permission->id}}">
								  <label class="custom-control-label pointer" for="permission_{{$permission->id}}"> - <b>{{ $permission->name }}</b> <small>({{ $permission->description }} )</small> </label>
								</div>
								@endforeach
				      </div>
			    	</div>
		      	<div class="float-right mb-3">
							<button type="submit" class="btn btn-success float-right">Guardar</button>
					<button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Cancelar</button>
		      	</div>
			  </div>
      </form>
		</div>
	</div>
</div>
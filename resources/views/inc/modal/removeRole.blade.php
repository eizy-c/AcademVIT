<div class="modal fade" id="removeRole{{ $role->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Eliminar rol</h5>
                </div>
                <div class="modal-body">
                    <p>¿Realmente desea eliminar este rol?</p>
                </div>
                <div class="modal-footer">
                     <form action="{{ route('role.destroy',$role->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button class="btn btn-danger">Eliminar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

  <!-- Modal crear aula-->
<div class="modal fade" id="registrar" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content p-0">
      <div class="card">
        <div class="card-header text-center">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" id="datosAula-nav" data-toggle="tab" href="#datosAula-tab" role="tab" aria-controls="datosAula" aria-selected="true">Aula educativa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="datosUser-nav" data-toggle="tab" href="#datosUser-tab" role="tab" aria-controls="datosUser" aria-selected="false">Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="verificar-nav" data-toggle="tab" href="#verificar-tab" role="tab" aria-controls="verificar" aria-selected="false">Verificar</a>
            </li>
          </ul>
        </div>
        <form  method="POST" action="{{ route('register') }}" name="add_aula">
            @csrf
          <div class="card-body">
            <div class="tab-content px-2" id="myTabContent">
              <div class="tab-pane fade show active" id="datosAula-tab" role="tabpanel" aria-labelledby="datosAula-tab">
                <div class="form-group row">
                  <label for="nombreaula" class="font-weight-bold">Nombre del aula</label>
                  <input type="text" class="form-control" id="nombreaula" value="{{ old('nombreaula')}}" name="nombreaula">
                  <div id="validarNombreaula" class="text-invalid"></div>
                </div>
                <div class="row">
                  <button type="button" name="next-datosUser" id="next_datosUser" class="btn btn-info ml-auto">Siguiente</button>
                </div>
              </div>

              <div class="tab-pane fade" id="datosUser-tab" role="tabpanel" aria-labelledby="datosUser-tab">
                  <div class="form-group row">
                    <label for="name" class="font-weight-bold float-left">Nombre</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}">

                  <div id="validarNombreUser" class="text-invalid"></div>
                  </div>

                <div class="form-group row">
                  <label for="email"class="font-weight-bold" >Correo electrónicooo</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}">
                  <div id="validarEmail" class="text-invalid"></div>
                </div>
                <div class="form-group row">
                  <label for="password" class="font-weight-bold">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password">
                  <div id="validarPassword" class="text-invalid"></div>
                </div>
                <div class="form-group row">
                  <label for="password_confirmation" class="font-weight-bold">Confirmar contraseña</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                  <div id="validarpassword_confirmation" class="text-invalid"></div>
                </div>

                <input type="hidden" class="form-control" id="tipo" name="tipo" value="profesor">


                <div class="row">
                  <button type="button" name="previous-datosUser" id="previous_datosUser" class="btn btn-secondary ml-auto">Regresar</button>
                  <button type="button" name="next-verificar" id="next_Verificar" class="btn btn-info">Siguiente</button>
                </div>
              </div>

              <div class="tab-pane fade" id="verificar-tab" role="tabpanel" aria-labelledby="verificar-tab">
               <div class="row">
                <table class="table table-borderless table-sm">
                  <tbody>
                    <tr>
                      <th>aula</th>
                      <td id="aula-name"></td>
                    </tr>
                    <tr><th></th><td></td></tr>
                    <tr><th></th><td></td></tr>
                    <tr>
                      <th>Nombre</th>
                      <td id="user-name"></td>
                    </tr>
                    <tr>
                      <th>correo electrónico</th>
                      <td id="user-email"></td>
                    </tr>
                  </tbody>
                </table>
               </div>
                <div class="row">
                  <button type="button" name="previous-datosUser" id="previous_verificar" class="btn btn-secondary ml-auto">Regresar</button>
                  <button type="submit" name="crear-aula" id="btn-crear" class="btn btn-success">Crear aula</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
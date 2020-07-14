<div class="modal fade" id="addActividad" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered " role="document">
		<div class="modal-content p-0">
			<div class="card">
			<div class="card-body">
				<form method="POST" action="{{route('actividad.store' )}}" >
					@csrf
					<div class="form-group input-field">
						<label for="inputAddress">Nombre de la actividad</label>
						<input type="text" class="form-control" name="nombreAula" id="inputAddress">
					</div>
					<button type="submit" class="btn btn-success float-right">Guardar</button>
					<button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Cancelar</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
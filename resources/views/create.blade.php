<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
	<h3>Añadir Usuario</h3>
	<div class="row">
		<div class="col-xl-12">
			<div class="row">
				<form action="{{route('cliente.store')}}" method="POST">
				@csrf		
				<div class="form-group">
					<label for="apellidos">Apellidos</label>
					<input type="text" class="form-control" name="apellidos" required>
					
				</div>
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" name="nombre" required>
					
				</div>
				<div class="form-group">
					<label for="documento">Documento</label>
					<input type="text" class="form-control" name="documento" required>
					
				</div>
				<div class="form-group">
					<label for="direccion">Dirección</label>
					<input type="text" class="form-control" name="direccion" required>
					
				</div>
				<div class="form-group">
					<label for="telefono">Teléfono</label>
					<input type="text" class="form-control" name="telefono" required>
					
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" name="email" required>
					
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Guardar">
					<input type="reset" class="btn btn-warning" value="Borrar">
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>
			</div>

		</div>
	</div>

</div>
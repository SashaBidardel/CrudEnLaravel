<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
	<h3>Editar cliente</h3>
	<div class="row">
		<div class="col-xl-12">
			<div class="row">
				<form action="{{route('cliente.update',$cliente->id)}}" method="Post" >
				@csrf		
				@method('PUT')
				<div class="form-group">
					<label for="apellidos">Apellidos</label>
					<input type="text" class="form-control" name="apellidos" value="{{$cliente->apellidos}}" required>
					
				</div>
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" name="nombre" value="{{$cliente->nombre}}" required>
					
				</div>
				<div class="form-group">
					<label for="documento">Documento</label>
					<input type="text" class="form-control" name="documento" value="{{$cliente->documento}}" required>
					
				</div>
				<div class="form-group">
					<label for="direccion">Dirección</label>
					<input type="text" class="form-control" name="direccion" value="{{$cliente->direccion}}" required>
					
				</div>
				<div class="form-group">
					<label for="telefono">Teléfono</label>
					<input type="text" class="form-control" name="telefono" value="{{$cliente->telefono}}" required>
					
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" name="email" value="{{$cliente->email}}"required>
					
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Guardar">
					<input type="reset" class="btn btn-default" value="Cancelar">
					<a href="javascript:history.back()">Ir al listado</a>
				</div>
			</form>
			</div>

		</div>
	</div>

</div>
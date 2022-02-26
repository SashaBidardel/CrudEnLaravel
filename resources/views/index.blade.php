<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    


<div class="col-md-12">

    <div class="table-responsive">
        <table class="table table-bordered table-condensed table-striped">
            <thead>
                <th>Editar/Eliminar/Favorito</th>
               
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>DOCUMENTO</th>
                <th>TELÉFONO</th>
                <th>EMAIL</th>
                <th>DIRECCIÓN</th>
            </thead>

            <tbody>
                @foreach($cliente as $row)
                <tr>
                    <td><a href="{{route('cliente.edit',$row->id)}}"class="btn btn-warning btn-sm">Editar</a>
                        <a href="{{route('cliente.show',$row->id)}}"class="btn btn-success btn-sm">Favorito</a>
                        
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$row->id}}">
                           Eliminar
                          </button>
                    </td>
                    
                    <td>{{$row->id}} </td>
                    <td>{{$row->nombre}} </td>
                    <td>{{$row->apellidos }}</td>
                    <td>{{$row->documento}} </td>
                    <td>{{$row->telefono}}</td>
                    <td>{{$row->email}} </td>
                    <td>{{$row->direccion}} </td>
                    <td>
                        

                    </td>
                </tr>
                @include('delete')
                @endforeach
            </tbody>

        </table>
       <div class="container">
           <h3>BUSCADOR</h3>
           <div class="row">
                <div class="col-sm-4">   
                <form action="{{ route('cliente.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" Value="Buscar">
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{route('cliente.create')}}" class="btn btn-succes" style="background-color: green">Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
           </div>
       </div>
        {!! $cliente->links() !!}
    </div>
    <script>
        console.log("hola");
    </script>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>




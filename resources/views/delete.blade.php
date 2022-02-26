
  <div class="modal fade" id="modal-delete-{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
     <form action="{{route('cliente.destroy',$row->id)}}" method="post">
      @csrf
      @method('DELETE')
    
       

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...Estás seguro de querer eliminar este registro {{$row->apellidos." ".$row->nombre}}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
        </div>
      </div>
    </form>
    </div>
    
  </div>
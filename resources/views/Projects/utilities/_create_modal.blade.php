<div class="modal fade" id="modalProyectos" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Escribir nueva reseña</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{ route('proyectos.store') }}"> 
        {{ csrf_field() }}
      <div class="modal-body">
        <div class="row">
            <div class="col-md-8">
               <div class="form-group">
                  <label>Título de la película</label>
                  <input type="text" class="form-control" name="name" required="">
               </div>
            </div>
          </div>
          <body class="antialiased">
  <label>Subir poster</label>
  <form action="" method="POST">
    {{csrf_field()}}
<input type="file" name="image">

  

</body>
        <div class="form-group">
          <label>Reseña</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar Proyecto</button></form>
        
  </div>
</form>
</div>
</div>
</div>
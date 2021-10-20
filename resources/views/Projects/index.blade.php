@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	      <div class="col-m2-12 text-rigth">
		      <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalProyectos">Crear nuevo proyecto</a>
	     </div>
    </div>

    <div class="row">
    	<div class="col-md-12">
    		<h4>Mis proyectos</h4>
    		<hr>
    	</div>
    	@foreach($projects as $project)
    	<div class="col-md-4">
    		<div class="card card-body">
    			<h5>{{ $project->name }}</h5>
    		</div>
    	</div>
    	@endforeach
    </div>
</div>

<div class="modal fade" id="modalProyectos" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Proyecto</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="{{ route('proyectos.store') }}"> {{ csrf_field() }}
      <div class="modal-body">
        <div class="row">
            <div class="col-md-8">
               <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" name="name" required="">
               </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Completo</label>
                <select class="form-control" name="status">
                   <option value="En Proceso">En Proceso</option>
                   <option value="Terminado">Terminado</option>
                   <option value="Atrasado">Atrasado</option>
                   <option value="Cancelado">Cancelado</option>
                </select>
              </div>
             </div>
</div>
<div class="form-group">
    <label>Descripción</label>
    <textarea class="form-control" name="description" rows="3"></textarea>
</div>
</div>
  <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
     <button type="submit" class="btn btn-primary">Guardar Proyecto</button>
  </div>
</form>
</div>
</div>
</div>

  @endsection


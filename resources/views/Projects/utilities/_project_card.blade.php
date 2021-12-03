<div class="card mb-3">

	<div class="card-body">

		<h5>{{ $project->name }}</h5>
		<p>{{ $project->description }}</p>
		@foreach($project->users as $user)
		<p>{{ $user->name }}</p>
		@endforeach
		<hr>

		<a href="" data-toggle="modal" data-target="#modalCrearTarea_{{ $project->id }}" class="btn btn-outline-dark btn-sm mb-3">Calificar</a>


		@foreach($project->tasks as $task)
			<div class="d-flex align-items-center justify-content-between">
				<div style="width:60%;">
					<p class="mb-1">{{ $task->title }}</p>
					
					
					@if($task->is_complete == false)
                      <span class="badge badge-warning">Pendiente</span>
                      @else
                      <span class="badge badge-success">Completada</span>
                      @endif
				</div>
			<div>
			
                      
                      
                          
                      </div>
                </div>
		@endforeach

		<hr>	

		<p>Calificada el: {{ Carbon\Carbon::parse($project->created_at)->format('d M Y H:i') }}</p>

	</div>

</div>

<!-- Modal -->

<div class="modal fade" id="modalCrearTarea_{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calificar película</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
      </div>
      <form method="POST" action="{{  route('tareas.store')  }}">
      <div class="modal-body">
        {{ csrf_field() }}

        <input type="hidden" name="source" value="proyectos" readonly="">

        <input type="hidden" name="project_id" value="{{ $project->id }}" readonly="">

        <input type="hidden" name="user_id" value="{{ $project->id }}" readonly="">

      
					<div class="form-group">
						<label>View Day</label>
						<input type="date" name="deadline" class="form-control">
					</div>

					<div class="form-group">
						<label>Calificación</label>
						<br>
					</div>
				<div class="form-group">
						<label>Numero de estrellas</label>
						<input type="number" min="1" max="5" name="deadline" class="form-control">
					</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
     </form>
    </div>
  </div>
</div>


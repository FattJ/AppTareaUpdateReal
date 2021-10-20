@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">EDITAR TAREA</div>
                   
                     <div class="card-body">
                     <form method="POST" action="{{route('tareas.update', $task->id) }}">
                     {{ csrf_field() }}
                     {{ method_field('PUT') }}


							<div class="form-group">
								<label for="">Titulo tarea</label>
								<input type="text" name="title" class="form-control" value= "{{ $task->title }}" required="">
							</div>

							<div class="form-group">
								<label for="">Fecha entrega</label>
								<input type="date" name="deadline"  value= "{{ $task->deadline }}" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Descripcion</label>
								<textarea class="form-control" name="description" rows="5">{{ $task->description }}</textarea>
							</div>

							<button type="submit" class="btn btn-dark">Actualizar tarea</button>
                            
                            <a href="{{ route('tareas.index') }}" class="btn btn-outline-dark">Cancelar</a>
						</form>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card">
           <div class="card-header">CREAR TAREA</div>
                   
                     <div class="card-body">
                     <form method="POST" action="{{route('tareas.store')}}">
                     {{ csrf_field() }}

							<div class="form-group">
								<label for="">Titulo tarea</label>
								<input type="text" name="title" class="form-control" required="">
							</div>

							<div class="form-group">
								<label for="">Fecha entrega</label>
								<input type="date" name="deadline" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Descripcion</label>
								<textarea class="form-control" name="description" rows="5"></textarea>
							</div>
							<div class="form-group">
				   			<label for="exampleFormControlSelect1">Selecciona usuario</label>
				    		<select class="form-control" id="exampleFormControlSelect1" name="user_id">
				    				@foreach($users as $user)
				      		<option value="{{ $user->id }}">{{ $user->name }}</option>
				        			@endforeach
				    		</select>
				  		</div>
							<button type="submit" class="btn btn-dark">Guardar tarea</button>

						</form>
                 </div>
            </div>
        </div>
    </div>
@endsection







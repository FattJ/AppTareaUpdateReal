@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card">
           <div class="card-header">WATCHLIST</div>
                   
                     <div class="card-body">
                     <form method="POST" action="{{route('tareas.store')}}">
                     {{ csrf_field() }}

							<div class="form-group">
								<label for="">Título de la película</label>
								<input type="text" name="title" class="form-control" required="">
							</div>

							<div class="form-group">
								<label for="">Fecha de estreno</label>
								<input type="date" name="deadline" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Compañia</label>
								<textarea class="form-control" name="description" rows="5"></textarea>
							</div>
							<button type="submit" class="btn btn-dark">Guardar película</button>

						</form>
                 </div>
            </div>
        </div>
    </div>
@endsection







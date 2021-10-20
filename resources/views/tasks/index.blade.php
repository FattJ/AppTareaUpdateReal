@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">MIS TAREAS</div>
    <div class="card-body">
        <a href="{{ route('tareas.create')}}" class= "btn btn-primary mb-3">Crear nueva tarea</a>
                

<table class="table table-striped">
  <thead>
 <tbody>

                            @foreach($tasks as $task)
                            <tr>
                                <th scope="row">{{ $task->id }}</th>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->deadline }}</td>
                                <td>{{ $task->description }}</td>
                                <td>
                                    @if($task->is_complete == false)
                                        <span class="badge badge-warning"> No disponible</span>
                                    @else
                                          <span class="badge badge-success">Completar</span>
                                    @endif
                                      </td>
                                      <td>
                                        <a href="{{ route('tareas.status',$task->id) }}" class="btn btn-outline-success btn-sm"><ion-icon name="checkbox-outline"></ion-icon></a>
                                    
                                     <a href="{{ route('tareas.edit',$task->id) }}" class="btn btn-outline-info btn-sm"><ion-icon name="create-outline"></ion-icon></a>

                                      <form method="POST" action="{{route('tareas.destroy', $task->id) }}">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}

                                     <button type="submit" class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>

                                 </form>

                                    </td>
                            </tr>

                            @endforeach
                        </tbody>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

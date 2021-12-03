@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MI WATCHLIST</div>
    <div class="card-body">
        <a href="{{ route('tareas.create')}}" class= "btn btn-primary mb-3">Agregar nueva película</a>
              </div>  

         <table class="table table-sm">
            <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Fecha de estreno</th>
            
            <th scope="col">Estado</th>
            </tr>
                  </thead>
                  <tbody>
                    @foreach($tasks as $task)
                    <tr>
                <th scope="row">{{ $task->id }}</th>
                      <td>{{ $task->title }}</td>
                      <td>{{ $task->deadline }}</td>
                      <td>@if($task->is_complete == false)
                <span class="badge badge-warning">Pendiente</span>
                      @else
                <span class="badge badge-success">Vista</span>
                      @endif
                 </td>
                <td>@if($task->is_complete == false)
        <a href="{{ route('tareas.status', $task->id) }}" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top" title="Completar"><ion-icon name="checkbox-outline"></ion-icon></a>
                      @endif
        
        <form method="POST" style="display: inline-block;" action="{{ route('tareas.destroy', $task->id) }}">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
        <button type="submit" data-toggle="tooltip" data-placement="top" title="Borrar" class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon></button>
            </form>
                </td>
                </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
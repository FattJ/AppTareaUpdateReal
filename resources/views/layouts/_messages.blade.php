@if(Session::has('info'))

<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Atención</strong> {{ Session::get('info') }}

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif

@if(Session::has('alert'))

<div class="alert alert-secondary alert-dismissible fade show" role="alert">
  <strong>Alerta</strong> {{ Session::get('alert') }}
  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif

@if(Session::has('exito'))

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Alerta</strong> {{ Session::get('exito') }}
  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif

@if(Session::has('date'))

<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Alerta</strong> {{ Session::get('date') }}
  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif

@if(Session::has('edit'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Alerta</strong> {{ Session::get('edit') }}
  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
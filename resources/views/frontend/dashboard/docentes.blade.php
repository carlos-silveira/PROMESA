@extends('frontend.dashboard.layouts.plantilla',['titulo'=>'Bienvenido > Alumnos'])
@section('styles')

  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endsection
@section('container')
@if($errors->any())
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <h5>Error:</h5>
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach

  </ul>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if($message=Session::get('Listo'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<h5>Error:</h5>
<ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach

</ul>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<!-- Agregar Alumno -->
<h4>Docentes</h4>
      <form class="" action="/portal/alumnos" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-row">
        <div class="col">
          <label for="">Nombre</label>
          <input required type="text" class="form-control" name="nombre" placeholder="Nombre" value="">
        </div>
        <div class="col">
        <label for="">Apellidos</label>
        <input required type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="">
        </div>
        <div class="col">
          <label for="">Especialidad</label>
          <input required type="text" class="form-control" name="especialidad" placeholder="Especialidad" value="">
        </div>
        <div class="col">
          <label for="">Telefono</label>
          <input required type="text" class="form-control" name="telefono" placeholder="Telefono" value="">
        </div>
        <div class="col">
          <label for="">Fecha de nacimiento</label>
          <input required type="date" class="form-control" name="fecha_de_nacimiento" placeholder=""value="">
          <button type="submit" class ="btn btn-primary"name="button">Insertar</button>
          <button type="reset" value="reset" class="btn btn-warning" name="button">Reiniciar</button>
        </div>


      </form>
      </div>

<!-- Fin Agregar Alumno  -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Codigo de maestro</th>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Especialidad</th>
                      <th>Telefono</th>
                      <th>Fecha de nacimiento</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Codigo de maestro</th>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Especialidad</th>
                      <th>Telefono</th>
                      <th>Fecha de nacimiento</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($Docentes as $a)
                      <tr>
                        <td>{{ $a->codigo_de_maestro}}</td>
                        <td>{{ $a->nombre}}</td>
                        <td>{{ $a->apellidos}}</td>
                        <td>{{ $a->telefono}}</td>
                        <td>{{ $a->fecha_de_nacimiento}}</td>

                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
        </div>
      </div>
@endsection

@section('scripts')
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap tables JavaScript -->
<script type="text/javascript" src="{{ asset('/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/demo/datatables-demo.js')}}"></script>

@endsection

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
<h4>Grupos</h4>
      <form class="" action="/portal/alumnos" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-row">
        <div class="col">
          <label for="">Codigo de grupo</label>
          <input required type="text" class="form-control" name="cod_grupo" placeholder="Cod_grupo" value="">
        </div>
        <div class="col">
        <label for="">Curso</label>
        <input required type="text" class="form-control" name="curso" placeholder="Curso" value="">
        </div>
        <div class="col">
          <label for="">Modalidad</label>
          <input required type="text" class="form-control" name="modalidad" placeholder="Modalidad"value="">
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
                      <th>Codigo de Grupo</th>
                      <th>Curso</th>
                      <th>Modalidad</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Codigo de Grupo</th>
                      <th>Curso</th>
                      <th>Modalidad</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($Grupos as $a)
                      <tr>
                        <td>{{ $a->cod_grupo}}</td>
                        <td>{{ $a->curso}}</td>
                        <td>{{ $a->modalidad}}</td>
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

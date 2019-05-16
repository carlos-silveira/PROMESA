@extends('frontend.dashboard.layouts.plantilla',['titulo'=>'Bienvenido > Calificaiones'])
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
<div class="alert alert-success alert-dismissible fade show" role="alert">
<h5>Todo bien:</h5>
{{session()->get('Listo')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<!-- Agregar Alumno -->
<h4 style="text-align:center">Calificaiones</h4>



<!-- Fin Agregar Alumno  -->
<div class="card shadow mb-4">

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Codigo_materia</th>
                      <th>Codigo_curso</th>
                      <th>Periodo</th>
                      <th>Calificacion 1</th>
                      <th>Calificacion 2</th>
                      <th>Calificacion 3</th>
                      <th>Calificacion 4</th>
                      <th><button type="button" class="btn btn-outline-success btn-md"name="button"
                      data-toggle="modal" data-target="#addModal"> <i class="fas fa-plus-circle"></i> </button></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Codigo_materia</th>
                      <th>Codigo_curso</th>
                      <th>Periodo</th>
                      <th>Calificacion 1</th>
                      <th>Calificacion 2</th>
                      <th>Calificacion 3</th>
                      <th>Calificacion 4</th>
                      <th><button type="button" class="btn btn-outline-success btn-md"name="button"
                      data-toggle="modal" data-target="#addModal"> <i class="fas fa-plus-circle"></i> </button></th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($Calificacion as $a)
                      <tr>
                        <td>{{ $a->codigo_materia}}</td>
                        <td>{{ $a->codigo_curso}}</td>
                        <td>{{ $a->anio}}</td>
                        <td>{{ $a->p1}}</td>
                        <td>{{ $a->p2}}</td>
                        <td>{{ $a->p3}}</td>
                        <td>{{ $a->p4}}</td>
                        <td>
                          <button type="button" class="btn btn-outline-primary btn-sm"id="btnEditar"
                          data-toggle="modal" data-target="#editarModal"
                           data-a-id="{{$a->codigo_materia}}"
                           data-codigo_curso="{{$a->codigo_curso}}"
                           data-anio="{{$a->anio}}"
                           data-p1="{{$a->p1}}"
                           data-p2="{{$a->p2}}"
                           data-p3="{{$a->p3}}"
                           data-p4="{{$a->p4}}"

                            > <i class="fas fa-edit"></i> </button>
                          <form class="" action="{{url('/portal/calificaciones',['codigo_materia'=>$a->codigo_materia])}}" method="post">
                            @csrf
                            <input type="hidden"  name="codigo_materia" value="{{$a->codigo_materia}}">
                            <input type="hidden" name="_method" value="delete">


                      <button type="submit" class="btn btn-outline-danger btn-sm"name="button"> <i class="fas fa-trash"></i> </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
        </div>
      </div>
 <!-- Modal de editar -->
 <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">

       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">
           Editar: <b id="titleEditar"></b>
         </h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form class="" action=" {{action('Portal\AlumnosController@update')}}" method="post" enctype="multipart/form-data">
           @csrf
         <div class="form-group">
  <input type="hidden" name="idsent" >
             <label for="">Nombre</label>
             <input required type="text" class="form-control" name="nombre" placeholder="Nombre" value="">
           </div>
           <div class="form-group">
           <label for="">Apellidos</label>
           <input required type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="">
         </div>
         <div class="form-group">
         <label for="">Direccion</label>
         <input required type="text" class="form-control" name="direccion" placeholder="Direccion" value="">
       </div>
           <div class="form-group">
             <label for="">Imagen</label>
             <input required type="file" class="form-control" name="imagen" placeholder="Imagen" value="">
           </div>
           <div class="form-group">
             <label for="">Fecha de nacimiento</label>
             <input required type="date" class="form-control" name="fecha_de_nacimiento" placeholder="" value="">
           </div>
           <div class="form-group">
             <label for="">Sexo</label>
             <select class="form-control" name="sexo">
               <option value="Masculino">Masculino</option>
               <option value="Femenino">Femenino</option>
             </select>
           </div>
           <div class="form-group">
             <label for="">Tutor</label>
             <input required type="text" class="form-control" name="tutor" placeholder="Tutor"value="">
           </div>
           <div class="form-group">
             <label for="">Codigo de curso</label>
             <input required type="text" class="form-control" name="codigo_de_curso" placeholder="Codigo de curso"value="">


           </div>




       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
         <button type="submit" class="btn btn-primary">Actualizar</button>
       </div>
 </form>
     </div>
   </div>
 </div>
 <!-- Modal de agregar -->
 <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">

       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">
           Editar: <b id="titleEditar"></b>
         </h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form class="" action="/portal/calificaciones" method="post" enctype="multipart/form-data">
           @csrf


             <div class="form-group">
               <label for="">Materia</label>
               <input required type="text" class="form-control" name="codigo_materia" placeholder="Codigo_materia" value="">
             </div>
             <div class="form-group">
             <label for="">Curso</label>
             <input required type="text" class="form-control" name="curso" placeholder="Curso" value="">
             </div>
             <div class="form-group">
               <label for="">Periodo</label>
               <input required type="date" class="form-control" name="periodo" placeholder="Periodo" value="">
             </div>
             <div class="form-group">
               <label for="">Calificacion 1</label>
               <input required type="text" class="form-control" name="p1" placeholder="p1"value="">
             </div>
             <div class="form-group">
               <label for="">Calificacion 2</label>
               <input required type="text" class="form-control" name="p2" placeholder="p2"value="">
             </div>
             <div class="form-group">
               <label for="">Calificacion 3</label>
               <input required type="text" class="form-control" name="p3" placeholder="p3"value="">
             </div>
             <div class="form-group">
               <label for="">Calificacion 4</label>
               <input required type="text" class="form-control" name="p4" placeholder="p4"value="">


           </div>




       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
         <button type="submit" class="btn btn-primary">Insertar</button>
       </div>
   </form>
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
<script type="text/javascript">
$('#editarModal').on('show.bs.modal', function(e) {

    //get data-id attribute of the clicked element
    var id = $(e.relatedTarget).data('a-id');
    var nombre = $(e.relatedTarget).data('nombre');
    var apellidos = $(e.relatedTarget).data('apellidos');
    var direccion = $(e.relatedTarget).data('direccion');
    var fecha_de_nacimiento = $(e.relatedTarget).data('fecha_de_nacimiento');
    var sexo = $(e.relatedTarget).data('sexo');
    var tutor = $(e.relatedTarget).data('tutor');
    var cc = $(e.relatedTarget).data('cc');
    //populate the textbox
    $(e.currentTarget).find('input[name="idsent"]').val(id);
    $(e.currentTarget).find('input[name="nombre"]').val(nombre);
    $(e.currentTarget).find('input[name="direccion"]').val(direccion);
    $(e.currentTarget).find('input[name="apellidos"]').val(apellidos);
    $(e.currentTarget).find('input[name="fecha_de_nacimiento"]').val(fecha_de_nacimiento);
    $(e.currentTarget).find('input[name="sexo"]').val(sexo);
    $(e.currentTarget).find('input[name="tutor"]').val(tutor);
    $(e.currentTarget).find('input[name="codigo_de_curso"]').val(cc);

});

</script>
@endsection

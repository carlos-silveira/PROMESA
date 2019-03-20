@extends('frontend.dashboard.layouts.plantilla',['titulo'=>'Bienvenido > Alumnos'])
@section('styles')

  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-table.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/jsgrid.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/jsgrid-theme.min.css')}}" rel="stylesheet">

@endsection
@section('container')
<div id="jsGrid"></div>
@endsection
@section('scripts')
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap tables JavaScript -->
<script type="text/javascript" src="{{ asset('/js/bootstrap-table.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/jsgrid.min.js')}}"></script>


<script>

    var materias = [
      {"ID Materia":"1","Materia":"Matematicas","Descripcion":""}
    ];


    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",

        inserting: true,
        editing: true,
        sorting: true,
        paging: true,

        data: materias,

        fields: [
            { name: "ID Materia", type: "number",validate: "required"},
            { name: "Materia", type: "text",validate: "required" },
            { name: "Descripcion", type: "text",validate: "required" },

            { type: "control" }
        ]
    });
</script>


@endsection

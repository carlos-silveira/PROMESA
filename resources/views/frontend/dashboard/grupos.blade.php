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
      {"ID Grupo":"1","Grupo":"1-B","Generacion":""}
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
            { name: "ID Grupo", type: "number",validate: "required"},
            { name: "Grupo", type: "text",validate: "required" },
            { name: "Generacion", type: "text",validate: "required" },

            { type: "control" }
        ]
    });
</script>


@endsection

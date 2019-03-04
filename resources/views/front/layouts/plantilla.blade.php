<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$titulo}}</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/styles.css')}}">
    <!-- <link rel="stylesheet" href="{{ asset('/css/jquery.gridder.min.css')}}"> -->
    @yield('estilos')
  </head>
  <body>
    @include('front.layouts.header')
  <main>
      @yield('container')
  </main>
  @include('front.layouts.footer')
<script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
<!-- <script src="{{asset('/js/popper.min.js')}}"></script> -->
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<!-- <script src="{{asset('/js/jquery.gridder.min.js')}}"></script> -->
@yield('scripts')
  </body>
</html>

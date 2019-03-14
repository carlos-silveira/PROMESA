<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$titulo}}</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    @yield('estilos')
  </head>
  <body>
    @include('frontend.site.layouts.header')
  <main>
      @yield('container')
  </main>
  @include('frontend.site.layouts.footer')
<script src="{{asset('js/scripts.min.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/custom.js`')}}"></script>
@yield('scripts')
  </body>
</html>

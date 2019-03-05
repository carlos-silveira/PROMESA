<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/login.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/jquery.gridder.min.css')}}">

  </head>
  <body>


    <section class="login-block">
        <div class="container">
    	<div class="row">
    		<div class="col-md-4 login-sec">
    		    <h2 class="text-center">Iniciar sesion</h2>
    		    <form class="login-form">
      <div class="form-group">
        <label for="exampleInputEmail1" class="text-uppercase">Usuario</label>
        <input type="text" class="form-control" placeholder="">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="text-uppercase">contraseña</label>
        <input type="password" class="form-control" placeholder="">
      </div>
        <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          <small>Recordar usuario</small>
        </label>
        <button type="submit" class="btn btn-login float-right">Iniciar</button>
      </div>
    </form>
    <div class="copy-textf"></div>
    		</div>
    		<div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>This is Heaven</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
      </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>This is Heaven</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h2>This is Heaven</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
      </div>
                </div>
    		</div>
    	</div>
    </div>
    </section>

    <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.gridder.min.js')}}"></script>
  </body>
</html>

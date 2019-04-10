<header>
  <!-- <div class="probootstrap-header-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
          <span><i class="icon-location2"></i>Brooklyn, NY 10036, United States</span>
          <span><i class="icon-phone2"></i>+1-123-456-7890</span>
          <span><i class="icon-mail"></i>info@uicookies.com</span>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
          <ul>
            <li class="{{Request::is('https://www.twitter.com'?'active' : '')}}"><a href="{{url('https://www.twitter.com')}}"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
            <li><a href="#"><i class="icon-youtube"></i></a></li>
            <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->
  <nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
      <div class="navbar-header">
        <div class="btn-more js-btn-more visible-xs">
          <a href="#"><i class="icon-dots-three-vertical "></i></a>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" title="uiCookies:Enlight">Enlight</a>
      </div>

      <div id="navbar-collapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="{{Request::is('/'?'active' : '')}}"><a href="{{url('/')}}">Inicio</a></li>
          <li class="{{Request::is('/teachers'?'active' : '')}}"><a href="{{url('/teachers')}}">Docentes</a></li>
          <li  class="{{Request::is('/events'?'active' : '')}}"><a href="{{url('/events')}}">Eventos</a></li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Apartados</a>
            <ul class="dropdown-menu">
              <li class="{{Request::is('/about'?'active' : '')}}"><a href="{{url('/about')}}">Sobre nosotros</a></li>
              <li class="{{Request::is('/curses'?'active' : '')}}"><a href="{{url('/courses')}}">Cursos</a></li>
              <li class="{{Request::is('/course-single'?'active' : '')}}"><a href="{{url('/course-single')}}">Curso individual</a></li>
              <li class="{{Request::is('/galeria'?'active' : '')}}"><a href="{{url('/galeria')}}">Galería</a></li>
              <!-- <li class="dropdown-submenu dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Second Level Menu</a></li>
                  <li><a href="#">Second Level Menu</a></li>
                  <li><a href="#">Second Level Menu</a></li>
                  <li><a href="#">Second Level Menu</a></li>
                </ul>
              </li> -->
              <li class="{{Request::is('/news'?'active' : '')}}"><a href="{{url('/news')}}">Noticias</a></li>
            </ul>
          </li>
          <li class="{{Request::is('/contact'?'active' : '')}}"><a href="{{url('/contact')}}">Contacto</a></li>
            <li class="{{Request::is('/login'?'active' : '')}}"><a href="{{url('/login')}}">Iniciar Sesión</a></li>
            <li  class="{{Request::is('/register'?'active' : '')}}"><a class="btn-registrar" href="{{url('/register')}}">Registrar</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<footer class="probootstrap-footer probootstrap-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-push-1">
        <div class="probootstrap-footer-widget">
          <h3>Links</h3>
          <ul>
            <li class="{{Request::is('/'?'active' : '')}}"><a href="{{url('/')}}">Inicio</a></li>
            <li class="{{Request::is('/curses'?'active' : '')}}"><a href="{{url('/courses')}}">Cursos</a></li>
            <li class="{{Request::is('/teachers'?'active' : '')}}"><a href="{{url('/teachers')}}">Docentes</a></li>
            <li class="{{Request::is('/news'?'active' : '')}}"><a href="{{url('/news')}}">Noticias</a></li>
            <li class="{{Request::is('/contact'?'active' : '')}}"><a href="{{url('/contact')}}">Contacto</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="probootstrap-footer-widget">
          <h3>Datos de contacto</h3>
          <ul class="probootstrap-contact-info">
            <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
            <li><i class="icon-mail"></i><span>info@domain.com</span></li>
            <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="probootstrap-footer-widget">
          <!-- <h3>About The School</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p> -->
          <h3>Social</h3>
          <ul class="probootstrap-footer-social">
            <li class="{{Request::is('https://www.twitter.com'?'active' : '')}}"><a href="{{url('https://www.twitter.com')}}"><i class="icon-twitter"></i></a></li>
            <!-- <li class="{{Request::is('https://www.twitter.com'?'active' : '')}}"><a href="{{url('https://www.twitter.com')}}"><i class="icon-github"></i></a></li> -->
            <li class="{{Request::is('https://www.facebook.com/ColegioNacionalCumbres/'?'active' : '')}}"><a href="{{url('https://www.facebook.com/ColegioNacionalCumbres/')}}"><i class="icon-facebook"></i></a></li>
            <!-- <li class="{{Request::is('https://www.twitter.com'?'active' : '')}}"><a href="{{url('https://www.twitter.com')}}"><i class="icon-dribbble"></i></a></li>
            <li class="{{Request::is('https://www.twitter.com'?'active' : '')}}"><a href="{{url('https://www.twitter.com')}}"><i class="icon-linkedin"></i></a></li> -->
            <li class="{{Request::is('https://www.twitter.com'?'active' : '')}}"><a href="{{url('https://www.twitter.com')}}"><i class="icon-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END row -->

  </div>

  <div class="probootstrap-copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-left">
          <p>&copy; 2019. Derechos Reservados Colegio Cumbres</p>
        </div>
        <div class="col-md-4 probootstrap-back-to-top">
          <p><a href="#" class="js-backtotop">Volver arriba<i class="icon-arrow-long-up"></i></a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

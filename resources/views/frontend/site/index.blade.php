@extends('frontend.site.layouts.plantilla',['titulo'=>'Bienvenido > Inicio'])
@section('container')
<div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url({{asset ('img/img-s1-2.jpg')}}" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate"></h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url({{asset ('img/img-s1-3.jpg')}}" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate"></h1>
                  </div>
                </div>
              </div>
            </div>

          </li>
          <li style="background-image: url({{asset ('img/img-s1-1.jpg')}}" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate"></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>Colegio Nacional Cumbres Nuevo Casas Grandes</h2>
            </div>
          </div>
        </div>
      </section>

      <section  class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>Acerca de la escuela</h3>
                  <p>Somos una escuela la cual nuestro principal proposito, es que los alumnos con los que contamos o, obtengan las herramientas necesarias para luchar en la vida.</p>
                  <!-- <p><a href="#" class="btn btn-primary">Learn More</a></p> -->
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url({{asset ('img/img-v1-1.jpg')}}">
                  <a href="https://www.youtube.com/watch?v=zDoEH4GfjxA" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">

          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Estudiantes matriculados</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Maestros certificados</span>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-library"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Pasando a las universidades</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Satisfacción de los padres</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section"
      style="background-color: #712180 " >
        <!-- <img src="{{asset ('img/logos.png')}}">  -->
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Difusion</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Filosofia</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Objetivos</a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        <div class="item">
                          <a class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{asset ('img/img-dn-1.jpg')}}"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Valores</h3>
                              <p>Calidad: Herramienta básica e importante para una propiedad inherente de cualquier cosa,
                                Calidez: Permite que nuestras relaciones con los otros fluyan de manera honesta y positiva y
                                 Liderazgo: Habilidades gerenciales o directivas que un individuo tiene para influir en la forma de ser</p>
                              <p></p>
                              <p></p>


                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{asset ('img/img-dn-2.jpg')}}"   class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Misión</h3>
                              <p>Generar condiciones y espacios para formar una comunidad estudiantil
                              moralmente responsable en distintas áreas de conocimiento, deporte, artes y desarrollo humano</p>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{asset ('img/img-de-3.jpg')}}"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Visión</h3>
                              <p>Ser una institución que se caracteriza por su innovación,liderazgo y alto compromiso moral,
                              que cuenta con alumnos agentes de cambio para la transformación social.</p>


                            </div>
                          </a>
                        </div>
                        <!-- END item -->

                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <!-- END row -->

                </div>
                <div id="upcoming-events" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl2">
                        <div class="item">
                          <a class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{asset ('img/img-de-1.jpg')}}"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Objetivo de Desarrollo o Misional</h3>
                              <p>Generar cuidadanos moralmente responsables, tienen pensamiento crítico, cultos, socialmente activo</p>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <!-- item vacio-->
                        <div class="item">
                          <a class="probootstrap-featured-news-box">

                          </a>
                        </div>
                        <!-- END item -->

                        <div class="item">
                          <a  class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{asset ('img/img-de-4.jpg')}}"   class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Objetivo General</h3>
                              <p>Elevar el desarrollo humano en muchos jóvenes y adolesentes de NCG</p>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </section>

      <section  class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Nuestros cursos destacados</h2>
              <p class="lead">Cumbres cuenta con una gran variedad de cursos para que los estudiantes utilizen todo su potencial</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{asset ('img/img-sc-1.jpg')}}">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Diseño de aplicaciónes</h3>
                  <p>En este curso se visualisara todo lo necesario para poder realizar diseños de aplicaciones</p>
                  <!-- <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">2,928 students enrolled</span></p> -->
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{asset ('img/img-sc-2.jpg')}}">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Ingeniería Química</h3>
                  <p>En este curso se visualisara todo lo necesario para poder entender la quimica y sus derivados</p>
                  <!-- <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">7,202 students enrolled</span></p> -->
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{asset ('img/img-sc-3.jpg')}}">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Arte</h3>
                  <p>En este curso se visualisara todo lo necesario para poder desarrollar tus habilidades artisticas</p>
                  <!-- <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">12,582 students enrolled</span></p> -->
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{asset ('img/img-sc-4.jpg')}}">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Musica</h3>
                  <p>En este curso se visualisara todo lo necesario para desarrollar tus habilidades musicales</p>
                  <!-- <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">9,582 students enrolled</span></p> -->
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>


      <section id="S-teachers" class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Conoce a nuestros docentes cualificados</h2>
              <p class="lead">En cada curso se asigna un docente altamente especialisado para una mayor comprencion</p>
            </div>
          </div>
          <!-- END row -->

          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/perfil-teacher-2.jpg"   class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Chris Worth</h3>
                  <p>Physical Education</p>
                  <!-- <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/perfil-teacher-1.jpg"   class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Janet Morris</h3>
                  <p>English Teacher</p>
                  <!-- <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/perfil-teacher-1.jpg"   class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Linda Reyez</h3>
                  <p>Math Teacher</p>
                  <!-- <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/perfil-teacher-1.jpg"   class="img-responsive">
                </figure>
                <div class="text">
                  <h3>Jessa Sy</h3>
                  <p>Physics Teacher</p>
                  <!-- <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_4.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Testimonios de Alumnos</h2>
              <p class="lead">Testimonios de alumnos egresados de la institucion</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                <div class="item">

                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/perfil-teacher-2.jpg"  >
                    </figure>
                    <blockquote class="quote">&ldquo;La institusion Cumbres a sido una de las mejores en la que e estado, ya que cuenta con un equipo de docentes altamente capacitados y unas instalaciones de calidad.&rdquo; <cite class="author"> &mdash; <span>Mike Fisher</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/perfil-teacher-2.jpg"  >
                    </figure>
                    <blockquote class="quote">&ldquo;La institusion Cumbres a sido una de las mejores en la que e estado, ya que cuenta con un equipo de docentes altamente capacitados y unas instalaciones de calidad.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/perfil-teacher-2.jpg" >
                    </figure>
                    <blockquote class="quote">&ldquo;La institusion Cumbres a sido una de las mejores en la que e estado, ya que cuenta con un equipo de docentes altamente capacitados y unas instalaciones de calidad.&rdquo; <cite class="author">&mdash; <span>Brandon White</span></cite></blockquote>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>¿Por qué elegir Cumbres?</h2>
              <p class="lead">Cumbres es una institucion que se preocupa por sus alumnos</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Docentes Altamente Capacitados</h3>
                  <p>Los docentes que imparten clases en Cumbres cuentan con certificados de especialida valorados a nivel internacional</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Instalaciones de Calidad</h3>
                  <p>Las instalaciones de Cumbres cuentan con equipamiento especialisado y con limpiesa de alta calidad</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Cursos</h3>
                  <p>Cumbres cuenta con cursos de calidad para un mayor desarrollo de las habilidades</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Actividades Recreativas</h3>
                  <p>Se cuenta con equipos de futboll, basquetboll, teniss, atletismo, musica, arte, dansa, entre otras actividades.</p>
                </div>
              </div>

              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Localizacion</h3>
                  <p>La institucion esta ubicada en un punto estrategico para la tranquilidad de los padres de familia</p>
                </div>
              </div>

              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Seguridad</h3>
                  <p>Se cuenta con personal encargado de verificar el acceso de personal para que los alumnos esten siempre seguros para tranquilidad de los padres</p>
                </div>
              </div>

            </div>
          </div>
          <!-- END row -->
        </div>
      </section>

      <!-- <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenga su admisión ahora!</h2>
              <a href="{{url('/register')}}" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Preinscripcion</a>
            </div>
          </div>
        </div>
      </section> -->

    </div>
@endsection

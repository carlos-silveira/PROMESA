@extends('frontend.site.layouts.plantilla',['titulo'=>'Bienvenido > Inicio'])
@section('container')
    <div class="probootstrap-page-wrapper">

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Acerca de nosotros</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <div class="text-uppercase probootstrap-uppercase">Historia</div>
                  <h3>Colegio Cumbres</h3>
                  <p>El Colegio Cumbres es una institución la cual se preocupa por
                     el futuro de sus alumnos, enseñando a utilizar todo el potencial de sus habilidades</p>
                  <!-- <p><a href="#" class="btn btn-primary">Learn More</a></p> -->
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url({{asset ('img/img-s1-1.jpg')}})">
                  <a href="https://www.youtube.com/watch?v=zDoEH4GfjxA" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
      <div class="container">
          <div class="col-md-6">
            <p>
              <img src="{{asset ('img/img-s1-2.jpg')}}" alt="Free Bootstrap Template by uicookes.com" class="img-responsive">
            </p>
          </div>
          <div class="col-md-6 col-md-push-1">
            <h2>Somos una escuela basada en la excelencia.</h2>
            <p>Colegio cumbres cuenta excelentes docentes capacitados
               para el desarrollo de los conocimientos de nuestros alumnos,
               para así formar personas con un futuro brillante y con un potencial para cualquier trabajo.</p>
            <!-- <p>Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p> -->
          </div>
      </div>
      </section>
      <section>

      </section>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
          <h2>Misión</h2>
          <p>Generar condiciones y espacios para formar una comunidad estudiantil moralmente responsable en distintas áreas de conocimiento, deporte, artes y desarrollo humano.<p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
          <h2>Visión</h2>
          <p>Generar ciudadanos moralmente responsables, y elevar el desarrollo humano en muchos jóvenes y adolescentes de NCG</p>
          <!-- <p>Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p> -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
          <h2>Objetivo de desarrollo misional y General</h2>
          <p>Colegio cumbres cuenta excelentes docentes capacitados para el desarrollo de los conocimientos de nuestros alumnos, para así formar personas con un futuro brillante y con un potencial para cualquier trabajo.</p>
            <!-- <p>Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p> -->
        </div>
      </div>
      </section>

      <section id="S-teachers" class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Fundadores del Colegio Nacional Cumbres</h2>
              <!-- <p class="lead"></p> -->
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/logos.png"   class="img-responsive">
                </figure>
                <div class="text">
                  <h3>IVAN ORLANDO FIERRO GARCIA</h3>
                  <p>Director General</p>
                  <p>Licenciado en Educación por la Universidad Pedagógica Nacional; y Licenciado en Artes
                    con especialidad en Danza Regional Mexicana por la Escuela de la Danza Mexicana “Jaime
                    Buentello Bazan” en la ciudad de Tepic en Nayarit; además ser maestrante en Estrategia
                    Educativa en la Universidad Regional del Norte; cuenta también con examen de certificación
                    del Idioma Ingles. Ha trabajado en la Docencia por más de 15 años; desempeñándose como
                    titular de grupo en nivel primaria, como docente en nivel de secundaria y preparatoria.</p>
                  <!-- <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/logos.png"   class="img-responsive">
                </figure>
                <div class="text">
                  <h3>THIARA IVETTE GARCIA DE ALBA</h3>
                  <p>Dirección Académica</p>
                  <p>Egresada de la Universidad Autónoma de Ciudad Juárez; quien curso estudios de educación
                     básica en Estados Unidos y Canadá; se ha desempeñado como docente por 10 años como
                     maestra bilingüe con más de 10 años de experiencia.</p>
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
            <div class="col-md-4 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/logos.png"   class="img-responsive">
                </figure>
                <div class="text">
                  <h3>GUADALUPE TELLO LUEVANOS</h3>
                  <p>Dirección Técnico Pedagógica</p>
                  <p>Maestra pensionada del sistema de educación pública y ha fungido como directora en educación
                    primaria en colegio privado, además de ser asesora para distintos colegios de educación preescolar,
                    primaria, secundaria y preparatoria. Con una trayectoria de más de 35 años en la docencia y
                    preparación y formación de docentes. </p>
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
    </div>
@endsection

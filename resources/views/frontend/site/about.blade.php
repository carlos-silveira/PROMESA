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
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
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

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>¿Por qué elegir Cumbres?</h2>
              <p class="lead">Cumbres es una institución que se preocupa por sus alumnos</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Docentes Altamente Capacitados</h3>
                  <p>Los docentes que imparten clases en Cumbres cuentan con
                    certificados de especialidad valorados a nivel internacional</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Instalaciones de Calidad</h3>
                  <p>Las instalaciones de Cumbres cuentan con equipamiento
                     especializado y con limpieza de alta calidad</p>
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
                  <p>Se cuenta con equipos de futbol, basquetbol,
                     tenis, atletismo, música, arte, danza, entre otras actividades.</p>
                </div>
              </div>

              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Localización</h3>
                  <p>La institución está ubicada en un punto estratégico
                     para la tranquilidad de los padres de familia</p>
                </div>
              </div>

              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Seguridad</h3>
                  <p>Se cuenta con personal encargado de verificar
                     el acceso de personal para que los alumnos estén siempre seguros para tranquilidad de los padres</p>
                </div>
              </div>

            </div>
          </div>
          <!-- END row -->
        </div>
      </section>

    </div>
@endsection

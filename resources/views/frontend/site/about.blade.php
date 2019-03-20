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
                  <p>A finales de la década de los 70’s, la Asociación de Profesionistas de Nuevo Casas Grandes, inicia los trámites para instalar la primer Institución de Educación Superior en el Noroeste del Estado. Iniciando operaciones en 1980 como una extensión del Instituto Tecnológico de Ciudad Juárez, bajo la modalidad de sistema abierto y en 1986 se logra cambiar a sistema escolarizado, ofreciendo las carreras de Licenciatura en Administración, Licenciatura en Contaduría e Ingeniería Industrial en 1988.</p>
                  <!-- <p><a href="#" class="btn btn-primary">Learn More</a></p> -->
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url({{asset ('img/escuela_4.jpg')}})">
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
              <img src="{{asset ('img/img-s1-1.jpg')}}" alt="Free Bootstrap Template by uicookes.com" class="img-responsive">
            </p>
          </div>
          <div class="col-md-6 col-md-push-1">
            <h2>Somos una escuela basada enfocada en la excelencia.</h2>
            <p>El colegio Cumbres es una institucion que su principal proposito es lograr que los alumnos logren utilizar todo el potencial de sus habilidades y que marquen un grandioso futuro para su vida</p>
            <!-- <p>Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p> -->
          </div>


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
                  <p>La institucion esta ubicada en un punto estrategico para la tranquilidad de los padres de familia.</p>
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

    </div>
@endsection

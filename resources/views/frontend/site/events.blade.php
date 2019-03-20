@extends('frontend.site.layouts.plantilla',['titulo'=>'Bienvenido > Inicio'])
@section('container')
    <div class="probootstrap-page-wrapper">

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Eventos escolares</h1>
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
                  <div class="text-uppercase probootstrap-uppercase">Eventos</div>
                  <h3>Eventos institucionales y recrativos</h3>
                  <p>Colegio Cumbres cuenta con eventos que ayudan a la socialisacion de los alumnos, docentes y padres de familia</p>
                  <!-- <p>
                    <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                    <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                  </p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p> -->
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url({{asset ('img/img-de-4.jpg')}})">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">

          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset ('img/img-de-1.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Temporada de basquetball</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset ('img/img-de-2.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Temporada de futboll</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset ('img/img-de-3.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Temporada de teniss</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                </div>
              </a>
            </div>

            <div class="clearfix visible-md-block"></div>

            <!-- <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Tempora consectetur unde nisi</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>

            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Tempora consectetur unde nisi</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Tempora consectetur unde nisi</h3>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div> -->

          </div>
        </div>
      </section>
    </div>
@endsection

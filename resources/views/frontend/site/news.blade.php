@extends('frontend.site.layouts.plantilla',['titulo'=>'Bienvenido > Inicio'])
@section('container')
<div class="probootstrap-page-wrapper">

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Noticias Escolares</h1>
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
                  <div class="text-uppercase probootstrap-uppercase">Noticias destacadas</div>
                  <h3>Visita al Conservatorio de Colorado springs en US</h3>
                  <p>Colegio Nacional Cumbres tiene un compromiso real con la Comunidad y sus estudiantes, tuvimos una exitosa reunión con el patronato y la fundadora y directora del Conservatorio De Colorado Springs</p>
                  <!-- <p>
                    <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                    <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span>
                  </p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p> -->
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url({{asset ('img/img_sm_3.1.jpg')}})">
                  <a href="https://www.youtube.com/watch?v=zDoEH4GfjxA" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
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
              <a  class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset ('img/img_sm_3.1.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Visita al Conservatorio De Colorado Springs En USA</h3>
                  <p>Colegio Nacional Cumbres tiene un compromiso real con la Comunidad y sus estudiantes, tuvimos una exitosa reunión con el patronato y la fundadora y directora del Conservatorio De Colorado Springs para que nuestros alumnos puedan estudiar los veranos en el Conservatory Of Colorado Springs </p>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>April 18, 2019</span>
                  <!-- <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span> -->
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a  class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset ('img/img_sm_5.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Demostración En Conservatorio De Colorado Springs En USA</h3>
                  <p>Durante nuestra visita al Colorado Springs Conservatory, una demostración de lo que hace la música, y lo que podrán lograr nuestros alumnos a través de esta colaboración y nuestro modelo único de educación.</p>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>April 22, 2019</span>
                  <!-- <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span> -->
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a  class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="{{asset ('img/img_sm_5.jpg')}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                      <h3>Veranos en Conservatory of Colorado Springs</h3>
                  <p>Nuestros alumnos puedan estudiar los veranos en el Conservatory Of Colorado Springs.</p>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>April 22, 2019</span>
                  <!-- <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span> -->
                </div>
              </a>
            </div>



            <div class="clearfix visible-md-block"></div>

            <!-- <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Tempora consectetur unde nisi</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, sunt!</p>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Tempora consectetur unde nisi</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, voluptatem.</p>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span>
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="#" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="probootstrap-text">
                  <h3>Tempora consectetur unde nisi</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, magnam.</p>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span>
                </div>
              </a>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div> -->

          </div>

        </div>
      </section>

    </div>
    @endsection

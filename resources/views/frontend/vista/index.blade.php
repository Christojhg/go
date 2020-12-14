@extends('frontend.layout_frontend')
@section('content')
      
<section id="introduction" class="tm-section-pad-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 video-responsive">
          <iframe src="https://drive.google.com/file/d/1-SbUQl85ghKkQWMKt736-8Tg7ey2T3ze/preview" ></iframe>
        </div>
        <div class="col-lg-3">
          <a href=""><button type="button" class="btn btn-primary">Siguiente</button></a>
          <a href=""><button type="button" class="btn btn-primary">Anterior</button></a>
        </div>
        <div class="col-lg-12">
          <div style="width: 23%; float:left; margin: 1%; background-color:rgba(255, 255, 255, .4);"></div>
        </div>
        <div class="col-lg-12">
          <div class="tm-intro-text-container">
              <h2 class="tm-text-primary mb-4 tm-section-title">Titulo</h2>
              <p class="mb-4 tm-intro-text">
                Curso: 
            </p>
            <p class="mb-4 tm-intro-text">
                Descripcion del video :
            </p>
            <p class="mb-4 tm-intro-text">
              Git : 
          </p>
          </div>
        </div>
      </div>
    </section>

    <style>
.video-responsive {
    height: 0;
    overflow: hidden;
    padding-bottom: 56.25%;
    padding-top: 30px;
    position: relative;
    }
.video-responsive iframe, .video-responsive object, .video-responsive embed {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    }
      </style>
        
@endsection
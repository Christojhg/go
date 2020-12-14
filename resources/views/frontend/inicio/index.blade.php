@extends('frontend.layout_frontend')
@section('content')
      
      <!-- banenr wrapper -->
      <div class="banner-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner-wrap justify-content-between align-items-center">
                        <div class="left-wrap">
                            <span class="rnd">IMDb 6.7</span>
                            <h2>Made <br> in heaven</h2>
                            <span class="tag"><b>SEASON 1</b></span>
                            <span class="tag">2020</span>
                            <span class="tag"><b>HD</b></span>
                            <span class="tag"><b>16+</b></span>
                            <span class="tag">2 h 20 min</span>
                            <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                            <a href="video.html" class="btn btn-lg"><img src="images/play.png" alt="icn">Ver Ahora</a>
                        </div>
                        <div class="right-wrap" style="background-image: url(images/banner-2.jpg);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banenr wrapper -->

    <!-- crew wrapper -->
    <div class="slide-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-left mb-4 mt-4">
                    <h2>Empresas</h2>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-slider-full owl-carousel owl-theme">
                        @foreach($empresas as $empresa)
                        <div class="owl-items"><a class="crew-wrap"><img src="{{asset('app/empresas/'.$empresa->imagen)}}" alt="team"><span>{{$empresa->nombre}}</span></a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- slider wrapper -->
    <div class="slide-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-left mb-4 mt-4">
                    <h2>Ultimos Agregados</h2>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="slide-slider-full owl-carousel owl-theme">
                        <div class="owl-items">
                            <a class="slide-one" href="season.html">
                                <div class="slide-image"><img src="images/s1.jpg" alt="image"></div>
                                <div class="slide-content">
                                    <h2>Made in haven <img src="images/plus.png" alt="icon"></h2>
                                    <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                    <span class="tag">2 h 20 min</span>
                                    <span class="tag">2020</span>
                                    <span class="tag"><b>HD</b></span>
                                    <span class="tag"><b>16+</b></span>
                                </div>
                            </a>
                        </div>
                        <div class="owl-items">
                            <a class="slide-one" href="season.html">
                                <div class="slide-image"><img src="images/s2.jpg" alt="image"></div>
                                <div class="slide-content">
                                    <h2>Made in haven <img src="images/plus.png" alt="icon"></h2>
                                    <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                    <span class="tag">2 h 20 min</span>
                                    <span class="tag">2020</span>
                                    <span class="tag"><b>HD</b></span>
                                    <span class="tag"><b>16+</b></span>
                                </div>
                            </a>
                        </div>
                        <div class="owl-items">
                            <a class="slide-one" href="season.html">
                                <div class="slide-image"><img src="images/s3.jpg" alt="image"></div>
                                <div class="slide-content">
                                    <h2>Made in haven <img src="images/plus.png" alt="icon"></h2>
                                    <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                    <span class="tag">2 h 20 min</span>
                                    <span class="tag">2020</span>
                                    <span class="tag"><b>HD</b></span>
                                    <span class="tag"><b>16+</b></span>
                                </div>
                            </a>
                        </div>
                        <div class="owl-items">
                            <a class="slide-one" href="season.html">
                                <div class="slide-image"><img src="images/s4.jpg" alt="image"></div>
                                <div class="slide-content">
                                    <h2>Made in haven <img src="images/plus.png" alt="icon"></h2>
                                    <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                    <span class="tag">2 h 20 min</span>
                                    <span class="tag">2020</span>
                                    <span class="tag"><b>HD</b></span>
                                    <span class="tag"><b>16+</b></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
    
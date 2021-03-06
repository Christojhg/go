@extends('frontend.layout_frontend')
@section('content')

<div class="page-nav p-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="search-wrapper">
                    <h2 class="mb-3">{{$cantidad_cursos}} De cursos".</h2>
                    <p class="mb-0">{{$cantidad_videos}} De videos.</p>
                </div>
            </div>
        </div>
    </div>
</div>
 
<!-- slider wrapper -->
<div class="slide-wrapper search-wrap-slide">
    <div class="container">
        @foreach($cursos_t as $cursos)
        <div class="row">
            <div class="col-sm-12 mt-4">
                <div class="slide-slider owl-carousel owl-theme">
                    <div class="owl-items">
                        <a class="slide-one" href="season.html">
                            <div class="slide-image"><img src="{{ asset('frontend/images/s2.jpg')}}" alt="image"></div>
                            <div class="slide-content">
                                <h2>Made in haven <img src="{{ asset('frontend/images/plus.png')}}" alt="icon"></h2>
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
                            <div class="slide-image"><img src="{{ asset('frontend/images/s2.jpg')}}" alt="image"></div>
                            <div class="slide-content">
                                <h2>Gravity <img src="{{ asset('frontend/images/plus.png')}}" alt="icon"></h2>
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
                            <div class="slide-image"><img src="{{ asset('frontend/images/s2.jpg')}}" alt="image"></div>
                            <div class="slide-content">
                                <h2>Inspector <img src="{{ asset('frontend/images/plus.png')}}" alt="icon"></h2>
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
                            <div class="slide-image"><img src="{{ asset('frontend/images/s2.jpg')}}" alt="image"></div>
                            <div class="slide-content">
                                <h2>Sky Staar <img src="{{ asset('frontend/images/plus.png')}}" alt="icon"></h2>
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
        @endforeach
        
    </div>
</div>
<!-- slider wrapper -->

<!-- slider wrapper -->




@endsection
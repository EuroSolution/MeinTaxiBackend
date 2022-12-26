@extends('user.layout.app')

@section('content')
<!-- <div class="banner row no-margin" style="background-image: url('{{ asset('asset/img/banner-bg.jpg') }}');">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="col-md-8">
            <h2 class="banner-head"><span class="strong">Get there</span><br>Your day belongs to you</h2>
        </div>
        <div class="col-md-4">
            <div class="banner-form">
                <div class="row no-margin fields">
                    <div class="left">
                        <img src="{{ asset('asset/img/ride-form-icon.png') }}">
                    </div>
                    <div class="right">
                        <a href="{{url('login')}}">
                            <h3>Entrar como usuario</h3>
                            <h5>Regístrate <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>
                <div class="row no-margin fields">
                    <div class="left">
                        <img src="{{ asset('asset/img/ride-form-icon.png') }}">
                    </div>
                    <div class="right">
                        <a href="{{ url('/provider/register') }}">
                            <h3>Entrar como Conductor</h3>
                            <h5>Regístrate <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>
                <p class="note-or">Or <a href="{{ url('/provider/login') }}">Iniciar sesión</a> with your rider account.</p>
            </div>
        </div>
    </div>
</div> -->
<div class="banner row no-margin" style="background-position: center; background-image: url('{{ asset('asset/img/slider-bg-1.jpg') }}');">
    <div class="banner-overlay"></div>
    <div class="container slider pad-60">
        <div class="row">
        <div class="col-md-12 center ">

            <h2 class="banner-head">{{env('APP_TITLE')}}<br>All Transportation, In a Single App!</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-3">
             <div class="row no-margin fields banner-ride-drive">
                    <div class="btn-icon">
                        <img src="{{ asset('asset/img/destination.png') }}">
                    </div>
                    <div class="btn-txt">
                        <a href="{{url('login')}}">
                            <h3 class="btn-title">Users</h3>
                            <!-- <h5>Regístrate <i class="fa fa-chevron-right"></i></h5> -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
             <div class="row no-margin fields banner-ride-drive">
                    <div class="left">
                        <img src="{{ asset('asset/img/taxi-car.png') }}">
                    </div>
                    <div class="right">
                        <a href="{{ url('/provider/login') }}">
                            <h3 class="btn-title">Drivers</h3>
                            <!-- <h5>Regístrate <i class="fa fa-chevron-right"></i></h5> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="banner-form">
                <div class="row no-margin fields">
                    <div class="left">
                        <img src="{{ asset('asset/img/ride-form-icon.png') }}">
                    </div>
                    <div class="right">
                        <a href="{{url('login')}}">
                            <h3>Entrar como usuario</h3>
                            <h5>Regístrate <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>
                <div class="row no-margin fields">
                    <div class="left">
                        <img src="{{ asset('asset/img/ride-form-icon.png') }}">
                    </div>
                    <div class="right">
                        <a href="{{ url('/provider/register') }}">
                            <h3>Entrar como Conductor</h3>
                            <h5>Regístrate <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>
                <p class="note-or">Or <a href="{{ url('/provider/login') }}">Iniciar sesión</a> with your rider account.</p>
            </div>
        </div> -->
    </div>
</div>
<div class="row white-section pad-60">
    <div class="container">
        <div class="col-md-6 img-box text-center"> 
            <img src="{{ asset('asset/img/screen-bg.png') }}">
        </div>
        <div class="col-md-6">
             <div class="content-block">
              <div class="icon"><img src="{{ asset('asset/img/taxi-app.png') }}"></div>
            <h2>You touch a button and you arrive at a destination, it's that simple!</h2>
            <div class="title-divider"></div>
            <p>A plus service, a taxi or traveling with your pet. An App that knows exactly what you want and you can pay in cash with always fixed rates.</p>
            <a class="content-more more-btn" href="{{url('/ride')}}">More Reasons to Travel<i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
    </div>
</div>

<div class="row gray-section pad-60">
    <div class="container">                
        <div class="col-md-6">
            <div class="content-block">
            <div class="icon"><img src="{{ asset('asset/img/destination.png') }}"></div>
            <h2>Any destination at any time</h2>
            <div class="title-divider"></div>
            <p>Heading to work, running errands around town, or a night out with your friends?<br>{{env('APP_TITLE')}} get where you want to go without the need for reservations, calls or high fees.</p>
            <a class="content-more more-btn" href="{{url('/ride')}}">More reasons to travel<i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
        <div class="col-md-6 img-box text-center"> 
            <img src="{{ asset('asset/img/screen-bg-3.png') }}">
        </div>
    </div>
</div>

<div class="row white-section pad-60">
    <div class="container">
        <div class="col-md-6 img-box text-center"> 
            <img src="{{ asset('asset/img/screen-bg-4.png') }}">
        </div>
        <div class="col-md-6 content-block">
              <div class="icon"><img src="{{ asset('asset/img/budget.png') }}"></div>
            <h2>Are you worried about dynamic rates? U.S. too!</h2>
            <div class="title-divider"></div>
            <p>{{env('APP_TITLE')}} always offers you a clean, comfortable and nice car.<br>We believe that it is not always necessary to pay more for excellent service, with {{env('APP_TITLE')}} you do the best choice</p>
            <a class="content-more more-btn" href="{{url('/ride')}}">More reasons to travel <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</div>

<div class="row gray-section pad-60 full-section">
    <div class="container">                
        <div class="col-md-6 content-block">
              <div class="icon"><img src="{{ asset('asset/img/car-wheel.png') }}"></div>
            <h2>We are like you!</h2>
            <div class="title-divider"></div>
            <p>Thanks to our incentives, we achieve that drivers have the highest commitment.<br>
This makes the experience {{env('APP_TITLE')}} be cool, mothers, fathers, teachers, students, neighbors or friends, connected on a homemade platform.</p>
            <a class="content-more more-btn" href="{{ url('/drive') }}">why drive with {{ Setting::get('site_title', 'HelloRide')  }} <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="col-md-6 full-img text-center" style="background-image: url({{ asset('asset/img/behind-the-wheel.jpg') }});"> 
            <!-- <img src="img/anywhere.png"> -->
        </div>
    </div>
</div>

<div class="row white-section pad-60 ">
    <div class="container">
        <div class="col-md-6 img-box text-center"> 
            <img src="{{ asset('asset/img/cost-cities.png') }}">
        </div>
        <div class="col-md-6 content-block">
              <div class="icon"><img src="{{ asset('asset/img/taxi-location.png') }}"></div>
            <h2>Helping cities for the benefit of all</h2>
            <div class="title-divider"></div>
            <p>We achieve that people have additional income and collaborate with the mobility of citizens.</p>
            <a class="content-more more-btn" href="{{ url('/login') }}">Register <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</div>

<div class="row gray-section pad-60 full-section">
    <div class="container">
        <div class="col-md-6 content-block">
              <div class="icon"><img src="{{ asset('asset/img/seat-belt.png') }}"></div>
            <h2>Committed to your safety</h2>
            <div class="title-divider"></div>
            <p>Inside the experience {{env('APP_TITLE')}},We ensure your safety at every stage of the jou.</p>
            <a class="content-more more-btn" href="{{ url('/login') }}">Register <i class="fa fa-chevron-right"></i></a>
        </div>
        <!-- <div class="col-md-6 img-box text-center"> 
            <img src="{{ asset('asset/img/seat-belt.jpg') }}">
        </div> -->
        <div class="col-md-6 full-img text-center" style="background-image: url({{ asset('asset/img/safty-bg.jpg') }});"> 
            <!-- <img src="img/anywhere.png"> -->
        </div>
    </div>
</div>
<div class="row find-city">
    <div class="container pad-60 content-block center">
        <h2>{{env('APP_TITLE')}} is it in your city?</h2>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
        <form>
            <div class="input-group find-form">
                <input type="text" class="form-control" placeholder="Search" id="origin-input">
                <div id="map" style="display: none;"></div>
                <span class="input-group-addon">
                    <button type="button" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-2x fa-arrow-right"></i>
                    </button>  
                </span>
            </div>           
        </form>
    </div>
</div>
    </div>
</div>
<!-- <div class="row app-dwon pad-60">
    <div class="container pad-60"">
        <div class="row center">
            <h2>Get App on</h2>
            <div class="col-md-3 col-md-offset-3">
                 
             <a href="{{Setting::get('store_link_ios','#')}}">
            <img src="{{asset('asset/img/appstore.png')}}">
                                        </a>
            </div>
            <div class="col-md-3">
             <a href="{{Setting::get('store_link_android','#')}}">
                                            <img src="{{asset('asset/img/playstore.png')}}">
                                        </a>
                                    </div>
        </div>
    </div>
</div>

    <div class="container footer-social content-block pad-60"">
        <div class="row center">
            <h2>Get Connect with Scoical Media</h2>
            <div class="col-md-6 col-md-offset-3">
                 <div class="socil-media">
                   <ul>
                                    <li><a href="#"><i class="fa fa-2x fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-2x fa-twitter"></i></a></li>
                                </ul>
                 </div>
             </div>
    </div>
</div> -->



<!-- <div class="footer-city row no-margin" style="background-image: url({{ asset('asset/img/footer-city.png') }});"></div> -->
@endsection
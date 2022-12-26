@extends('user.layout.app')

@section('content')
<div class="banner row no-margin" style="background-image: url('{{ asset('asset/img/banner-bg.jpg') }}');">
    <div class="banner-overlay"></div>
    <div class="container pad-60">
        <div class="col-md-8">
            <h2 class="banner-head"><span class="strong">
No schedules and no bosses!</span><br>
Drive when you want and generate what you need.</h2>
        </div>
        <div class="col-md-4">
            <div class="banner-form">
                <div class="row no-margin fields">
                    <div class="left">
                    	<img src="{{asset('asset/img/taxi-app.png')}}">
                    </div>
                    <div class="right">
                        <a href="{{url('login')}}">
                            <h3>travel with {{Setting::get('site_title','HelloRide')}}</h3>
                            <h5>Log in <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>

                <div class="row no-margin fields">
                    <div class="left">
                    	<img src="{{asset('asset/img/taxi-app.png')}}">
                    </div>
                    <div class="right">
                        <a href="{{url('provider/login')}}">
                            <h3>Start as a driver</h3>
                            <h5>Log in <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                </div>

                <!-- <p class="note-or">Or <a href="{{ url('login') }}">Iniciar sesión</a> with your rider account.</p> -->
            </div>
        </div>
    </div>
</div>

<div class="row white-section pad-60 no-margin">
    <div class="container">
        
        <div class="col-md-4 content-block small">
             <div class="box-shadow">
                <div class="icon"><img src="{{asset('asset/img/driving-license.png')}}"></div>
            <h2>Set your own hours</h2>
            <div class="title-divider"></div>
            <p>
you can drive with {{env('APP_TITLE')}} at any time, day or night, 365 days a year. When you drive it's always up to you, so it never interferes with the important things in your life.</p>
        </div>
    </div>

        <div class="col-md-4 content-block small">
             <div class="box-shadow">
                <div class="icon"><img src="{{asset('asset/img/destination.png')}}"></div>
            <h2>You make more money every time</h2>
            <div class="title-divider"></div>
            <p>
Ride fares start with a base amount, then increase over time and distance.</p>
        </div>
    </div>

        <div class="col-md-4 content-block small">
             <div class="box-shadow">
                <div class="icon"><img src="{{asset('asset/img/taxi-app.png')}}"></div>
            <h2>
Let the app lead the way</h2>
            <div class="title-divider"></div>
            <p>You will get detailed instructions and tools that will help you draw the best route, you will also know the exact amount that each user must make
.</p>
        </div>
    </div>

    </div>
</div>

<div class="row gray-section no-margin full-section">
    <div class="container">                
        <div class="col-md-6 content-block">
            <div class="icon"><img src="{{asset('asset/img/taxi-car.png')}}"></div>
            <h3>About the app</h3>
            <h2>
Easy and light to handle</h2>
            <div class="title-divider"></div>
            <p>Whenever you want to earn money, just open the app and you will start receiving ride requests. You will get information about your user and address of their location. When the trip ends, you will receive another request nearby and this way you will increase your income quickly
.</p>
            <a class="content-more more-btn" href="{{url('login')}}">SEE HOW IT WORKS <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="col-md-6 full-img text-center" style="background-image: url({{ asset('asset/img/driver-car.jpg') }});"> 
            <!-- <img src="img/anywhere.png"> -->
        </div>
    </div>
</div>

<div class="row white-section pad-60 no-margin">
    <div class="container">
        
        <div class="col-md-4 content-block small">
            <div class="box-shadow" style="height: 520px;">
                <div class="icon"><img src="{{asset('asset/img/budget.png')}}"></div>
            <h2>Reward</h2>
            <div class="title-divider"></div>
            <p>When driving with {{env('APP_TITLE')}} you will get the best rate in the country, only 8% with always fair rates.</p>
        </div></div>

        <div class="col-md-4 content-block small">
            <div class="box-shadow" style="height: 520px;">
                <div class="icon"><img src="{{asset('asset/img/driving-license.png')}}"></div>
            <h2>Requisitos</h2>
            <div class="title-divider"></div>
            <p>¿listo o lista para conducir?</p>
            <p>Nuestros requisitos son:</p>
            <p>-Identity document<br>-Driver's license<br>-Vehicles four doors 2005 onwards.<br>-Documents of your vehicle in order.</p>
            <p>
These will enter a safety study and you will be notified when you are fit to drive.</p>
        </div></div>

        <div class="col-md-4 content-block small">
            <div class="box-shadow" style="height: 520px;">
                <div class="icon"><img src="{{asset('asset/img/seat-belt.png')}}"></div>
            <h2>Security</h2>
            <div class="title-divider"></div>
            <p>All passengers are verified with your personal information and phone number, so you know who you are picking up and so do we..</p>
        </div></div>

    </div>
</div>
            
<div class="row find-city no-margin">
    <div class="container">
        <div class="col-md-12 center content-block">
            <div class="box-shadow">
                <div class="pad-60 ">
        <h2>start earning money</h2>
        <p>Ready to make money? The first step is to register online.</p>
<a class="content-more more-btn" href="{{url('login')}}">
START DRIVING NOW <i class="fa fa-chevron-right"></i></a>
        <!-- <button type="submit" class="full-primary-btn drive-btn">START DRIVE NOW</button> -->
    </div>
</div>
</div>
    </div>
</div>

<!-- <div class="footer-city row no-margin" style="background-image: url({{ asset('asset/img/footer-city.png') }});"></div> -->
@endsection
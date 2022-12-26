@extends('user.layout.auth')

@section('content')

<div class="full-page-bg" style="background-image: url({{ asset('asset/img/login-user-bg.jpg') }});">
    <div class="log-overlay"></div>
    <div class="full-page-bg-inner">
        <div class="row no-margin">
            <div class="col-md-6 log-left">
                <span class="login-logo"><img src="{{ Setting::get('site_logo', asset('logo-black.png'))}}"></span>
                <h2>Create your account and move in minutes</h2>
                <p>Welcome to {{Setting::get('site_title', 'HelloRide')}}, the easiest way to get around at the touch of a button</p>
            </div>
            <div class="col-md-6 log-right">
                <div class="login-box-outer">
                <div class="login-box row no-margin">
                    <div class="col-md-12">
                        <a class="log-blk-btn" href="{{url('register')}}">Create a new account</a>
                        <h3>Login</h3>
                    </div>
                    <form  role="form" method="POST" action="{{ url('/login') }}"> 
                    {{ csrf_field() }}                      
                        <div class="col-md-12">
                             <input id="email" type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-12">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}><span> remember account</span>
                        </div>
                       
                        <div class="col-md-12">
                            <button type="submit" class="log-teal-btn">Log in</button>
                        </div>
                    </form>

                    @if(Setting::get('social_login', 0) == 1)
                    <div class="col-md-12">
                        <a href="{{ url('/auth/facebook') }}"><button type="submit" class="log-teal-btn fb"><i class="fa fa-facebook"></i>Sign in with Facebookk</button></a>
                    </div>  
                    <div class="col-md-12">
                        <a href="{{ url('/auth/google') }}"><button type="submit" class="log-teal-btn gp"><i class="fa fa-google-plus"></i>Sign in with Google+</button></a>
                    </div>
                    @endif

                    <div class="col-md-12">
                        <p class="helper"> <a href="{{ url('/password/reset') }}">¿Did you forget your password?</a></p>   
                    </div>
                </div>


                <div class="log-copy"><p class="no-margin">{{ Setting::get('site_copyright', '&copy; '.date('Y').' Appoets') }}</p></div></div>
            </div>
        </div>
    </div>
</div>
@endsection
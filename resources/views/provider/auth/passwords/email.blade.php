@extends('provider.layout.auth')

<!-- Main Content -->
@section('content')

    <div class="col-md-12">
        <a class="log-blk-btn" href="{{url('/provider/login')}}">Do you already have an account?</a>
        <h3>Reset your password</h3>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form role="form" method="POST" action="{{ url('/provider/password/email') }}">
        {{ csrf_field() }}

        <div class="col-md-12">
            <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif                        
        </div>

        <div class="col-md-12">
            <button class="log-teal-btn" type="submit">SEND PASSWORD RESTORE LINK</button>
        </div>
    </form>     


@endsection



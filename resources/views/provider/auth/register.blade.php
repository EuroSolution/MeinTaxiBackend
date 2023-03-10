@extends('provider.layout.auth')

@section('content')
<div class="col-md-12">
    <a class="log-blk-btn" href="{{ url('/provider/login') }}">Do you already have an account?</a>
    <h3>Sign up</h3>
</div>

<div class="col-md-12">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/provider/register') }}">

        <div id="first_step">
            <div class="col-md-4">
                <input value="{{env('COUNTRY_PHONE')}}" type="text" placeholder="{{env('COUNTRY_PHONE')}}" id="country_code" name="country_code" />
            </div> 
            
            <div class="col-md-8">
                <input type="phone" autofocus id="phone_number" class="form-control" placeholder="@lang('provider.signup.enter_phone')" name="phone_number" value="{{ old('phone_number') }}" data-stripe="number" maxlength="10" onkeypress="return isNumberKey(event);"/>
            </div>

            <div class="col-md-8">
                @if ($errors->has('phone_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-md-12" style="padding-bottom: 10px; display: none" id="twilio_sms">
            </div>

            <div class="col-md-12" style="padding-bottom: 10px;" id="twilio_sms_btn">
                <input type="button" class="log-teal-btn small" onclick="twilioSms();" value="Verify your phone number"/>
            </div>
        </div>

        <div id="second_step" style="display: none;">
            <div class="col-md-12">
                <input type="text" autofocus id="phone_code" class="form-control" placeholder="Enter Phone Code" data-stripe="number" maxlength="6" onkeypress="return isCodeKey(event);" />
            </div>

            <div class="col-md-12" style="padding-bottom: 10px; display: none" id="twilio_code">
            </div>

            <div class="col-md-12" style="padding-bottom: 10px;" id="twilio_code_btn" >
                <input type="button" class="log-teal-btn small" onclick="twilioCode();" value="Verify your phone number"/>
            </div>
        </div>

        {{ csrf_field() }}

        <div id="third_step" style="display: none;">
            <div>
                <input id="fname" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="@lang('provider.profile.first_name')" autofocus data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="@lang('provider.profile.first_name') can only contain alphanumeric characters and . - spaces">
                @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input id="lname" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="@lang('provider.profile.last_name')"data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="@lang('provider.profile.last_name') can only contain alphanumeric characters and . - spaces">            
                @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="@lang('provider.signup.email_address')" data-validation="email">            
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <label class="checkbox-inline"><input type="checkbox" name="gender" value="MALE" data-validation="checkbox_group" data-validation-qty="1" data-validation-error-msg="Please choose one gender">@lang('provider.signup.male')</label>
                <label class="checkbox-inline"><input type="checkbox" name="gender" value="FEMALE" data-validation="checkbox_group" data-validation-qty="1" data-validation-error-msg="Please choose one gender">@lang('provider.signup.female')</label>
                @if ($errors->has('gender'))
                    <span class="help-block">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                @endif
            </div>                        
            <div>
                <input id="password" type="password" class="form-control" name="password" placeholder="@lang('provider.signup.password')" data-validation="length" data-validation-length="min6" data-validation-error-msg="Password should not be less than 6 characters">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>    
            <div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="@lang('provider.signup.confirm_password')" data-validation="confirmation" data-validation-confirm="password" data-validation-error-msg="Confirm Passsword is not matched">

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>    
            <div>
                <select class="form-control" name="service_type" id="service_type" data-validation="required">
                    <option value="">Select Service</option>
                    @foreach(get_all_service_types() as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>

                @if ($errors->has('service_type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('service_type') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input id="service-number" type="text" class="form-control" name="service_number" value="{{ old('service_number') }}" placeholder="@lang('provider.profile.car_number')" data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="@lang('provider.profile.car_number') can only contain alphanumeric characters and - spaces">
                
                @if ($errors->has('service_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('service_number') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input id="service-model" type="text" class="form-control" name="service_model" value="{{ old('service_model') }}" placeholder="@lang('provider.profile.car_model')" data-validation="alphanumeric" data-validation-allowing=" -" data-validation-error-msg="@lang('provider.profile.car_model') can only contain alphanumeric characters and - spaces">
                
                @if ($errors->has('service_model'))
                    <span class="help-block">
                        <strong>{{ $errors->first('service_model') }}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="log-teal-btn">
                @lang('provider.signup.register')
            </button>

        </div>
    </form>
</div>
@endsection


@section('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
    $.validate({
        modules : 'security',
    });
    $('.checkbox-inline').on('change', function() {
        $('.checkbox-inline').not(this).prop('checked', false);  
    });
    function isNumberKey(evt)
    {   
        var edValue = document.getElementById("phone_number");
        var s = edValue.value;
        if (event.keyCode == 13) {
            event.preventDefault();
            if(s.length>=10){
                smsLogin();
            }
        }
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
    function isCodeKey(evt)
    {
        var edValue = document.getElementById("phone_code");
        var s = edValue.value;
        if (event.keyCode == 13) {
            event.preventDefault();
            if(s.length>=6){
                twilioCode();
            }
        }
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode > 31
            && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>
<script>
    // login callback
    function twilioCode() {
        var countryCode = document.getElementById("country_code").value;
        var phoneNumber = document.getElementById("phone_number").value;
        var phoneCode = document.getElementById("phone_code").value;
        $('#twilio_code').html("<p class='helper'> Please Wait... </p>");
        $.ajax({
            url: '{{route('twilio.code')}}',
            dataType: 'JSON',
            headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val() },
            type: 'POST',
            data:  { country: countryCode, phone: phoneNumber, code: phoneCode },
            success: function(data) {
                $('#second_step').fadeOut(400);
                $('#third_step').fadeIn(400);
            },
            error: function(xhr, status, err) {
                $('#twilio_code').html("<p class='helper'> " + xhr.responseJSON.message + "</p>").show();
            }
        });
    }

    // phone form submission handler
    function twilioSms() {
        var countryCode = document.getElementById("country_code").value;
        var phoneNumber = document.getElementById("phone_number").value;

        $('#twilio_sms').html("<p class='helper'> Please Wait... </p>").show();
        $('#phone_number').attr('readonly', true);
        $('#country_code').attr('readonly', true);
        $('#twilio_sms_btn').hide();

        $.ajax({
            url: '{{route('twilio.sms')}}',
            dataType: 'JSON',
            headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val() },
            type: 'POST',
            data:  { country: countryCode, phone: phoneNumber },
            success: function(data) {
                $('#first_step').fadeOut(400);
                $('#second_step').fadeIn(400);
            },
            error: function(xhr, status, err) {
                $('#twilio_sms').html("<p class='helper'> " + xhr.responseJSON.message + "</p>").show();
            }
        });
    }
</script>

@endsection
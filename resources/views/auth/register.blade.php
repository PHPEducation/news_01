<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('bower_components/login/images/icons/favicon.ico') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/login/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/login/vendor/animate/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/login/vendor/css-hamburgers/hamburgers.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/login/vendor/select2/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/login/css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/login/css/main.css') }}">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{ \Storage::disk('my-disk')->url('/img-01.png') }}" alt="IMG">
                    </div>
                    {!! Form::open(['route' =>'register', 'class' => 'login100-form validate-form', 'method' => 'POST']) !!}
                    {{ csrf_field() }}
                    <span class="login100-form-title">
                    {{ trans('language.register') }}
                    </span>
                    {{ $errors->first('email') }}
                    {{ $errors->first('password') }}
                    <div class="wrap-input100 validate-input" data-validate = "Username is requried">
                        {{ Form::text('name', old('email'), ['class' => 'input100', 'placeholder' => trans('language.username')]) }}
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "{{ trans('language.required-email') }} ex@abc.xyz">
                        {{ Form::email('email', old('email'), ['class' => 'input100', 'placeholder' => trans('language.email')]) }}
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = {{ trans('language.requied-password') }}>
                        {{ Form::password('password', ['class' => 'input100', 'placeholder' => trans('language.password')]) }}
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = {{ trans('language.required-password-confirmed') }}>
                        {{ Form::password('password_confirmation', ['class' => 'input100', 'placeholder' => trans('language.password-confirmed'), 'id' => 'password-confirm']) }}
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('remember', null, old('remember') ? true : '', ['class' => 'checkbox', 'id' => 'defaultLoginFormRemember']) !!}
                                    {{ trans('language.remember') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        {{ Form::submit(trans('language.register'), ['class' => 'login100-form-btn']) }}
                    </div>
                    <div class="text-center p-t-12">
                        </span>
                        <a class="txt2" href="#">
                        {{ trans('language.question-exist-account') }}
                        </a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <script src="{{ asset('bower_components/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('bower_components/login/vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('bower_components/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_components/login/vendor/select2/select2.min.js') }}"></script>
        <script src="{{ asset('bower_components/login/vendor/tilt/tilt.jquery.min.js') }}"></script>
        <script >
            $('.js-tilt').tilt({
               scale: 1.1
            })
        </script>
        <script src="{{ asset('bower_components/login/js/main.js') }}"></script>
    </body>
</html>

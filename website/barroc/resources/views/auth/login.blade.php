

        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->









            </ul>
        </div>
</div>
    <div class="page-wrap">
<div class="container">
    <div class="login-wrap">
    <div class="login-html">

                    <form class="" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                        <label for="tab-1" class="tab">Sign In</label>
                        <div class="login-form{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="sign-in-htm">
                                <div class="group">
                            <label for="email" class="label">E-Mail Address</label>


                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="group">

                            <label for="password" class="label">Password</label>


                                <input id="pass" type="password" class="input" name="password" datatype="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>




                            <div class="group">
                                <input type="submit" class="button" value="Sign-In">
                            </div>
                        </div>

                                <div class="logo">
                                    <h1>BARROC-IT</h1>
                                </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
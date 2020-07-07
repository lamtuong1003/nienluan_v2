
@extends('layouts.app')

@section('content')

<section class="container">
    <div class="login">
        <h1>Login to web</h1>
        <form method="post" action="{{route('postlogin')}}">
            @csrf
{{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
{{--            @if(Session::has('flag'))--}}
{{--            <div class="alert alert-{{Session::get('flag')}} ">{{Session::get('message')}}</div>--}}
{{--            @endif--}}

            <fieldset>
{{--                <input type="hidden" name="_token" value="{{csrf_token()}}"/>--}}
            <p><input type="text" name="login_email" value="" placeholder="Email"></p>
            <p><input type="password" name="login_password" value="" placeholder="Password"></p>
            <p class="remember_me">
                <label>
                    <input type="checkbox" name="remember_me" id="remember_me">
                    Remember me
                </label>
            </p>
                <a href=""> <p class="submit"><input type="submit" name="commit" value="Login"></p></a>
            </fieldset>
        </form>
    </div>

{{--    <div class="login-help">--}}
{{--        <p><a href="{{route('signin')}}">Click here to register</a></p>--}}
{{--    </div>--}}
</section>


@extends('layouts.app')

@section('contend')



<section class="container">
    <div class="login">
        <h1 >Create Account</h1>
        <h6>Get started with your free account</h6>
            <form method="get" action="{{route('login')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @if(count($errors)>0)
                    <div class="alert alert-dangers">
                        @foreach($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>
                @endif

                @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                @endif
                <div>
                    <input name="fullname" class="form-control" placeholder="Full name" type="text" required>
                </div>
                <div>
                    <input name="phonenumber" class="form-control" placeholder="Phone number" type="text" required >
                </div>
                <div>
                    <input name="email" class="form-control" placeholder="Email address" type="text"  required>
                </div>
                <div>
                    <lable> Select your subject</lable><br>
                        <input type ="checkbox" value="subject1" name="sj">
                        <lable>subject1</lable>
                        <input type ="checkbox" value="subject2" name="sj">
                        <lable>subject2</lable>
                        <input type ="checkbox" value="subject3" name="sj">
                        <lable>subject3</lable>
                        <input type ="checkbox" value="subject4" name="sj">
                        <lable>subject4</lable>
                </div>
                <div>
                    <input class="form-control" placeholder="Create password" type="password" name="password" required>
                    <input class="form-control" placeholder="Repeat password" type="password" name="re_password" required>
                        <div class="maxl">
                            <label class="radio inline" >
                                <input type="radio" name="gender" value="male" id="male" checked>
                                <span> Male </span>
                                <input type="radio" name="gender" value="female" id="female">
                                <span>Female </span>
                        </div>
                </div>
                <div class="submit">
                    <p class=""><input type="submit" name="" value="Create Account" ></p>
                    <p>Have an account? <a href="{{route('login')}}">Log In</a> </p>
                </div>
            </form>
    </div>

</section>

<!--contend for register end.//-->





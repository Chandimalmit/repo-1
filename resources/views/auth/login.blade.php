@extends('layouts.master')

@section('content')
<!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Login Page</li>
            </ol>
        </div>
    </div>
<!-- //breadcrumbs -->
<div class="login">
<div class="container">
<h2>Login Form</h2>
    
        <div class="login-form-grids animated wow slideInUp">
               
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email Address" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                               
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                               <input type="submit" value="Login">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
            
        </div>
    <p><a href="register">Register Here</a> (Or) go back to <a href="/">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
</div>
</div>
@endsection

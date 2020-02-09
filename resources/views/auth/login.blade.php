@extends('layouts.min')
@section('content')
<div class="login-content">

    <!-- Login -->
    <div class="nk-block toggled" id="l-login">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
        <div class="nk-form">
            <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-envelope-o"></i></span>
                <div class="nk-int-st">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus autocomplete="false">
                </div>
            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
            </div>
            <div class="input-group mg-t-15 {{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-edit"></i></span>
                <div class="nk-int-st">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
           {{-- <div class="checkbox">
                <label>
                    <input type="checkbox" class="i-checks" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>--}}
            {{--<div class="fm-checkbox">--}}
              {{--  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
    {{--            <label><input type="checkbox" --}}{{--class="i-checks"--}}{{-- name="remember" {{ old('remember') ? 'checked' : '' }} style="opacity: -50!important;"> <i></i> Keep me signed in</label>
    --}}      {{--  </div>--}}
            <button  type="submit"  class="btn btn-login btn-success btn-float"><i class="fa fa-arrow-right"></i></button>
        </div>
        </form>

        <div class="nk-navigation nk-lg-ic">
            <a href="{{ route('register') }}"  data-ma-block="#l-register"><i class="fa fa-plus"></i> <span>Register</span></a>
            <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
        </div>
    </div>

</div>
@endsection
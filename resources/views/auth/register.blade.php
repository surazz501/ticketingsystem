@extends('layouts.min')
@section('content')
    <div class="login-content">
       <!-- Register -->
   <div class="nk-block toggled" id="l-login">
       <form method="POST" action="{{ route('register') }}">
           {{csrf_field()}}
         <div class="nk-form">
             <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                 <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-user"></i></span>
                 <div class="nk-int-st">
                     <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                 </div>
                 @if ($errors->has('name'))
                     <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                 @endif
             </div>

             <div class="input-group mg-t-15 {{ $errors->has('email') ? ' has-error' : '' }}">
                 <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-envelope-o"></i></span>
                 <div class="nk-int-st">
                     <input type="text" class="form-control" placeholder="Email Address"  name="email" value="{{ old('email') }}" required>
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
             <div class="input-group mg-t-15 ">
                 <span class="input-group-addon nk-ic-st-pro"><i class="fa fa-lock"></i></span>
                 <div class="nk-int-st">
                    {{--<input type="password" class="form-control" placeholder="Password" name="password" required>--}}
                     <input id="password-confirm" type="password" placeholder="Password Confirmation"class="form-control" name="password_confirmation" required>

                 </div>

             </div>

             <button type="submit" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="fa fa-arrow-right"></i></button>
         </div>
       </form>
         <div class="nk-navigation rg-ic-stl">
             <a href="{{route('login')}}" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="fa fa-arrow-right"></i> <span>Sign in</span></a>
         </div>
     </div>

    <!-- Forgot Password -->
        {{--<div class="nk-block" id="l-forget-password">
             <div class="nk-form">
                 <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

                 <div class="input-group">
                     <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                     <div class="nk-int-st">
                         <input type="text" class="form-control" placeholder="Email Address">
                     </div>
                 </div>
                 <button  type="submit"  class="btn btn-login btn-success btn-float"><i class="fa fa-arrow-right"></i></button>

         --}}{{--        <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
         --}}{{--    </div>

             <div class="nk-navigation nk-lg-ic rg-ic-stl">
                 <a href="{{ route('login') }}"  data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
                 <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
             </div>
         </div>--}}
    </div>
@endsection
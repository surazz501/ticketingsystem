<!doctype html>
<html class="no-js" lang="">
@include('layouts.partials.main.head')
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div id="main-container">
    <div id="main">
    @include('layouts.partials.main.header')
    @include('layouts.partials.main.menu')
    @yield('content')
    </div>
</div>
<div id="footer-section">

    @include('layouts.partials.main.footer')
</div>
@include('layouts.partials.main.scripts')
@yield('push-script')
</body>
</html>
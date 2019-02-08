@include('layouts.header')
<section id="container" class="">
    <!--header start-->
    @include('layouts.navigator')
    <!--header end-->
    <!--sidebar start-->
    @include('layouts.sidebar')
    <!--sidebar end-->
    <!--main content start-->
    @yield('content')
    <!--main content end-->
</section>
@include('layouts.footer')
@include('layouts.header')
    <!-- ======= 1.01 Header Area ====== -->

@include('layouts.menu')

    <!-- ======= /1.01 Header Area ====== -->
@include('layouts.alerts')

@yield('page-styles')

    <!-- ======= 1.02 Home Area ====== -->
@yield('content')

    <!-- ======= 1.09 footer Area ====== -->
@include('layouts.footer')

@yield('page-scripts')

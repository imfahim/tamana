@include('panel.layouts.header')
    <!-- ======= 1.01 Header Area ====== -->

@include('panel.layouts.menu')

    <!-- ======= /1.01 Header Area ====== -->
@include('panel.layouts.alerts')

@yield('page-styles')

    <!-- ======= 1.02 Home Area ====== -->
@yield('content')

    <!-- ======= 1.09 footer Area ====== -->
@include('panel.layouts.footer')

@yield('page-scripts')

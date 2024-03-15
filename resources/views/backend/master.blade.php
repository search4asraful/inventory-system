<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Dashboard | {{ config('app.name') }}" name="description" />
    <!-- App favicon -->
    @include('backend.includes.style')

</head>
<body data-topbar="dark">
    <!-- Loader -->
    @include('backend.includes.preloader')
    
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('backend.includes.header')
        
        @include('backend.includes.sidebar')

        <!-- Start main content -->
        <main>
            @yield('content')
        </main>
        <!-- end main content-->

        @include('backend.includes.footer')
        
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('backend.includes.rightbar')
    <!-- Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('backend.includes.script')

    @stack('script')
</body>
</html>
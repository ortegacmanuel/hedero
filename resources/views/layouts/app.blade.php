@include('layouts/partials/head')
<body>
<div class="mainbody container-fluid">
    <div class="row">
        @include('layouts/partials/nav')
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            @section('sidebar')
                @include('layouts/partials/sidebar')
            @show
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">        
            @yield('content')
        </div>
    </div>
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

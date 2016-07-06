<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('plugins/bootstrap/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/pace/pace-theme-big-counter.css')  }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main-style.css') }}" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="{{ asset('plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
</head>
<body>
<!--  wrapper -->
<div id="wrapper">
    <!-- navbar top -->
        @include('layouts.navbartop')
    <!-- end navbar top -->

    <!-- navbar side -->
        @include('layouts.navbarside')
    <!-- end navbar side -->
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!--End Page Header -->
        </div>

        @yield('content')
    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="{{ asset('plugins/jquery-1.10.2.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('plugins/pace/pace.js') }}"></script>
<script src="{{ asset('scripts/siminta.js') }}"></script>
<!-- Page-Level Plugin Scripts-->
<script src="{{ asset('plugins/morris/raphael-2.1.0.min.js') }}"></script>
<script src="{{ asset('plugins/morris/morris.js') }}"></script>
<script src="{{ asset('scripts/dashboard-demo.js') }}"></script>

</body>

</html>

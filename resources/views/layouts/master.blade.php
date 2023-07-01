<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8"/>
    <title>Alnamas | @yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic&display=swap" rel="stylesheet">
    <!-- App css -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/css/main.css')}}" rel="stylesheet" type="text/css"/>
    @yield('custom_style')
</head>
<body>
<!-- Begin page -->
<div id="wrapper">
    {{-- Calling navbar --}}
    @include('layouts.navbar')
    @include('sweetalert::alert')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                {{-- Calling sidebar --}}
                @include('layouts.sidebar')
                @include('layouts.bottombar')
            </div>
            <div class="col-md-10">
                <!-- ============================================================= -->
                <!-- Start Page Content here -->
                <!-- ============================================================== -->
                <div class="content-page  p-md-3">
                    <div class="content">
                        <!-- Start Content-->
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@yield('modals')
@include('modals.best-images.add-image')
<!-- App js -->
<script src="https://kit.fontawesome.com/94124166ee.js" crossorigin="anonymous"></script>
<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>
{{-- custom script --}}
@yield('custom_script')
</body>

</html>

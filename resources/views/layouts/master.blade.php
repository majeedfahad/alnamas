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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                {{-- Calling sidebar --}}
                @include('layouts.sidebar')
            </div>
            <div class="col-md-10">
                <!-- ============================================================= -->
                <!-- Start Page Content here -->
                <!-- ============================================================== -->
                <div class="content-page  p-3">
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
<!-- App js -->
<script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/94124166ee.js" crossorigin="anonymous"></script>

<script src="/js/main.js"></script>
{{-- custom script --}}
@yield('custom_script')
</body>

</html>

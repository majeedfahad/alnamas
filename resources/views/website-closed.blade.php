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
    <style>
        body {

        }
    </style>
</head>
<body style="background-color: #f5f5f5;">
<!-- Begin page -->
<div id="wrapper">
    <div class="p-3">
        <!-- Start Content-->
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="height: 70vh">
            <div style="height: 50% ; " class="d-flex flex-column  justify-content-end">
                <img src="{{asset('/img/logo.png')}}" alt="" style="max-width: 300px;" class="d-block mx-auto">

            </div>

            <div class="row  d-flex flex-column align-items-center conty"
                 style="height: 50% ;">
                <div class="content text-center d-flex flex-column align-items-center justify-content-center">
                    <h3 class="mt-4 mb-3">الكبييير وصل يا رجالة !!</h3>
                    <p>
                        مش حنبلغكم متى يفتح الموقع، ادخل شيك كل شوي وخذ السبق الصحفي في إعلان افتتاح الموقع
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- App js -->
<script src="https://kit.fontawesome.com/94124166ee.js" crossorigin="anonymous"></script>
<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>

</body>

</html>


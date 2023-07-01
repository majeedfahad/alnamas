{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}


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
            <div style="height: 10%">
    </div>

            <div class="row  d-flex flex-column align-items-center justify-content-center conty"
                 style="height: 50% ;">
                <div class="side front" style="height: 196%">
                    <div class="content text-center d-flex flex-column align-items-center justify-content-center"  style="height: 90%">
                        <h3 class="mt-4 mb-3">لا تقولون انبهرتو توكم ما شفتوا شي !</h3>
                        <p>
                           
                        سجل الإمتاع جاااي بالطريق 

                        </p>


                        <button class="btn main-btn get-started" style="    width: 100%;">

                            ابدء الآن
                            <i class="fa-solid fa-arrow-left m-2 mt-0 mb-0"></i>
                        </button>

                    </div>
                </div>
                <div class="side back" style="height: 196%">
                    <form method="POST" action="{{ route('register') }}" class="content login-form" enctype="multipart/form-data">
                        @csrf

                        <div class=" mb-3 text-right">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('اسمك الثنائي') }}</label>

                            <div class="">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="بيكون اسم المستخدم">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3 text-right">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-end">{{ __('كلمة المرور') }}</label>

                            <div class="">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required
                                       autocomplete="new-password" placeholder="*****">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3 text-right">
                            <label for="image"
                                   class="col-md-4 col-form-label text-md-end">{{ __('هب لنا صورة للحساب') }}</label>

                            <div class="">
                                <input id="image" type="file"
                                       class="form-control @error('image') is-invalid @enderror" name="image"
                                       required
                                       accept="image/*">

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <button type="submit" class="btn main-btn" style="width: 100%;">
                                {{ __('تسجيل') }}
                            </button>
                        </div>
                    </form>
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


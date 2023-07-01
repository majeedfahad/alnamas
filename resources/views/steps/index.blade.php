@extends('layouts.master')
@section('custom_style')
    <style>
        .place{
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background-color: #1a202c;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .step-places li{
            position: relative;
            top: 10px;
            opacity: 0;
        }

    </style>
@endsection
@section('content')
{{--
    <form method="post" action="{{route('steps.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="d-flex align-items-center">
            <div>
                <label for="count" class="mt-2 mb-1">عدد خطواتك اليوم </label>
                <input id="count" class="form-control text-right" type="number" name="count" required placeholder="7500" style="width: 100%"/>
            </div>
        </div>
        <small> الصورة التحقق من المصداقية والموثوقية والأمانة والعدالة👇 <span class="text-danger">*</span></small>
        <label for="fileInput" class="file-input-label btn btn-dark mx-1 text-white mt-2 mb-1 fs-6 " style="width: 100%">
            ارفع صورة لعدد خطواتك من الجوال
        </label>
        <input type="file" id="fileInput" name="image" style="display: none;" accept="image/*" onchange="readURL(this);" required>
        <button type="submit" class=" text-white btn btn-dark mx-1 text-white mt-2 mb-1 fs-6" style="width: 100%">ارفع انجازك </button>
    </form>

--}}
    <div class="best-image-form  my-3">
        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#add-steps" class="text-white btn btn-dark mx-1 text-white mt-2 mb-1 fs-6" style="width: 100%;">
            احجز مركزك في تحدي المشي !
        </a>
    </div>
    <div class="d-flex justify-content-between bg-light py-3 px-2 rounded-3 align-items-center shadow-sm">
        <p class="text-center m-0 p-0" style="width: 40px;">#</p>
        <div class="d-flex justify-content-between align-items-center mx-2" style="width: 100%;">
            <p class="m-0 p-0">الرياضي الخورافي</p>
            <p class="m-0 p-0">خطواته</p>
        </div>

    </div>
    <ul class="step-places">
        @foreach($steps as $step)
            <li class="d-flex bg-light py-3 px-2 my-2 rounded-3 shadow-sm">
                <div class="place">
                    {{$step->id}}
                </div>
                <div class="d-flex justify-content-between mx-2 align-items-center" style="width: 100%">
                    <p class="name  m-0 p-0">{{$step->user->name}} </p>
                    <p class="steps-count m-0 p-0">{{$step->count}}</p>
                </div>
            </li>
        @endforeach
    </ul>

@endsection
@section('modals')
    @include('modals.steps.add-steps')
@endsection

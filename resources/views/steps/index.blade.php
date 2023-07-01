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

    <div class="best-image-form  my-3">
        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#add-steps">
            <i class="fa-solid fa-cloud-arrow-up"></i>
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

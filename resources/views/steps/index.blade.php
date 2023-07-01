@extends('layouts.master')
@section('custom_style')
    <style>
        .place{
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background-color: #20c997;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .place1{
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background-color: #ebdc6c;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .place2{
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background-color: #d63737 ;
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
        .dot {
  height: 25px;
  width: 25px;
  background-color: #20c997;
  border-radius: 50%;
  display: inline-block;
}
.dot1 {
  height: 25px;
  width: 25px;
  background-color:#ebdc6c;
  border-radius: 50%;
  display: inline-block;
}

.dot2 {
  height: 25px;
  width: 25px;
  background-color: #d63737;
  border-radius: 50%;
  display: inline-block;
}

    </style>
@endsection
@section('content')
    <div class="best-image-form  my-3">
        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#add-steps" class="text-white btn btn-dark mx-1 text-white mt-2 mb-1 fs-6" style="width: 100%;">
            احجز مركزك في تحدي المشي !
        </a>
    </div>
    <div class="d-flex justify-content-between bg-light py-3 px-2 rounded-3 align-items-center shadow-sm">
    <p class="m-0 p-0"> <span class="dot1"></span> قيد المعالجة </p>
    <p class="m-0 p-0"> <span class="dot"></span> مقبول </p>
        <p class="m-0 p-0"> <span class="dot2"></span> مرفوض يالتسذوب! </p>
       
</div>
    <p></p>
    <div class="d-flex justify-content-between bg-light py-3 px-2 rounded-3 align-items-center shadow-sm">
        <p class="text-center m-0 p-0" style="width: 40px;">#</p>
        <div class="d-flex justify-content-between align-items-center mx-2" style="width: 100%;">
            <p class="m-0 p-0">الرياضي الخارق </p>
            <p class="m-0 p-0">خطواته</p>
        </div>
    </div>

    <ul class="step-places">
        @foreach($steps as $step)
            <li class="d-flex bg-light py-3 px-2 my-2 rounded-3 shadow-sm">
            @if($step->isApproved())
                <div class="place">
                    {{$step->id}}
                </div>
            @else
             @if($step->isRejected())
            <div class="place2">
                    {{$step->id}}
                </div>
             @else
              <div class="place1">
                    {{$step->id}}
                </div>
                @endif
                @endif
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

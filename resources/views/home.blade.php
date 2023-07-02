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
        .step-places li{
            position: relative;
            top: 10px;
            opacity: 0;
        }
    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-4 post-format mb-2">
            <div class="card post">
                <div class="card-top d-flex align-items-center p-1 my-1">
                    <div>
                        <h2 class="m-2">أجمل صورة أمس</h2>
                    </div>
                </div>

                @if($image)
                    <div class="col-md-4 mb-2">
                        <div class="card post">
                            <div class="card-top d-flex align-items-center p-1 my-1">
                                <img src="{{$image->user->getFirstMediaUrl() != '' ? $image->user->getFirstMediaUrl() : 'https://placehold.co/50x50'}}"
                                     class="profile rounded-circle best-image" style="width: 50px; height: 50px" loading="lazy"
                                     onclick="document.getElementById('show-event-modal').src = this.src;">
                                <div>
                                    <strong class="m-2">{{$image->user->name}}</strong>
                                </div>
                            </div>

                            <img src="{{$image->getFirstMediaUrl()}}" alt="" class="post-img rounded best-image" style="height: 400px;
        object-fit: cover;"
                                 onclick="document.getElementById('show-event-modal').src = this.src;"
                                 loading="lazy">
                            <div class="actions p-2">
                                <ul class="d-flex">
                                    <li class="p-1 m-1">
                                        <i class="fa-solid fa-heart text-danger"></i> {{$image->likes()->count()}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-4 mb-2">
                        <div class="card post align-items-center mt-4">
                            <h4>مابعد تم تحديدها</h4>
                        </div>
                    </div>
                @endif

            </div>
        </div>
        <div class="col-md-4 post-format mb-2">
            <div class="card post">
                <div class="card-top d-flex align-items-center p-1 my-1">
                    <div>
                        <h2 class="m-2">أقوى رياضيين أمس</h2>
                    </div>
                </div>
                <ul class="step-places">
                    @foreach($steps as $key => $step)
                        <li class="d-flex bg-light py-3 px-2 my-2 rounded-3 shadow-sm">
                            <div class="place">{{$key+1}}</div>
                            <div class="d-flex justify-content-between mx-2 align-items-center" style="width: 100%">
                                <p class="name  m-0 p-0">{{$step->user->name}} </p>
                                <p class="steps-count m-0 p-0">{{$step->count}}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

@include('modals.events.create')

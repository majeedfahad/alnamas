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
                        <h2 class="m-2">أعلى صورة تفاعل خلال السفرة</h2>
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <div class="card post">
                        <div class="card-top d-flex align-items-center p-1 my-1">
                            <img src="{{$image ? $image->user->getFirstMediaUrl() : 'https://placehold.co/50x50'}}"
                                 class="profile rounded-circle best-image" style="width: 50px; height: 50px" loading="lazy"
                                 onclick="imageLoader(this)"
                                 onload="imageLoader(this, false)"
                            >
                            <div>
                                <strong class="m-2">{{$image->user->name ?? 'شد حيلك عشان نحط اسمك يا' . explode(" ", auth()->user()->name)[0]}}</strong>
                            </div>
                        </div>

                        <img src="{{$image ? $image->getFirstMediaUrl() : asset('/img/best-image-winner.jpg')}}" alt="" class="post-img rounded best-image" style="height: 400px;
    object-fit: cover;"
                             onclick="imageLoader(this)"
                             onload="imageLoader(this, false)"
                             loading="lazy">
                        @if($image)
                            <div class="actions p-2">
                                <ul class="d-flex">
                                    <li class="p-1 m-1">
                                        <i class="fa-solid fa-heart text-danger"></i> {{$image->likes()->count()}}
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4 post-format mb-2">
            <div class="card post">
                <div class="card-top d-flex align-items-center p-1 my-1">
                    <div>
                        <h2 class="m-2">أقوى الرياضيين خلال السفرة</h2>
                    </div>
                </div>
                <ul class="step-places">
                    @forelse($steps as $key => $step)
                        <li class="d-flex bg-light py-3 px-2 my-2 rounded-3 shadow-sm">
                            <div class="place">{{$key+1}}</div>
                            <div class="d-flex justify-content-between mx-2 align-items-center" style="width: 100%">
                                <p class="name  m-0 p-0">{{$step->user->name}} </p>
                                <p class="steps-count m-0 p-0">{{$step->total}}</p>
                            </div>
                        </li>
                    @empty
                        <div class="col-md-4 mb-2">
                            <div class="card post">

                                <img src="{{asset('/img/walking-winner.jpg')}}" alt="" class="post-img rounded best-image" style="height: 350px;
    object-fit: cover;"
                                     onclick="imageLoader(this)"
                                     onload="imageLoader(this, false)"
                                     loading="lazy">
                            </div>
                        </div>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection

@include('modals.events.create')

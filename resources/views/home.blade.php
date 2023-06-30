@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12 d-flex stories">
            <div class="account-pics m-2">
                <div class="account-pics m-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="https://placehold.co/60x60" alt="" class="rounded-circle">
                    <p>زيد عبدالرحمن</p>
                </div>
            </div>

        </div>
        <div class="col-md-4 post-format mb-2">
            <div class="card post">
                <div class="card-top d-flex align-items-center p-1 my-1">
                    <img src="https://placehold.co/50x50" alt="" class="profile rounded-circle">
                    <div>
                        <strong class="m-2">زيد عبد الرحمن</strong>
                    </div>
                </div>

                <img src="https://placehold.co/250x160" alt="" class="post-img">
                <div class="actions p-2 border-bottom">
                    <ul class="d-flex">
                        <li class="p-1 m-1"><a href="#"><i class="fa-solid fa-heart text-danger"></i></a> +23
                        </li>
                        <li class="p-1 m-1"><a href="#"><i class="fa-solid fa-paper-plane"></i></a></li>
                    </ul>
                </div>
                <div class="description text-right p-2">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ
                </div>
            </div>
        </div>
        <div class="col-md-4 post-format mb-2">
            <div class="card post">
                <div class="card-top d-flex align-items-center p-1 my-1">
                    <img src="https://placehold.co/50x50" alt="" class="profile rounded-circle">
                    <div>
                        <strong class="m-2">زيد عبد الرحمن</strong>
                    </div>
                </div>

                <img src="https://placehold.co/250x160" alt="" class="post-img">
                <div class="actions p-2 border-bottom">
                    <ul class="d-flex">
                        <li class="p-1 m-1"><a href="#"><i class="fa-solid fa-heart text-danger"></i></a> +23
                        </li>
                        <li class="p-1 m-1"><a href="#"><i class="fa-solid fa-paper-plane"></i></a></li>
                    </ul>
                </div>
                <div class="description text-right p-2">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ
                </div>
            </div>
        </div>
        <div class="col-md-4 post-format mb-2">
            <div class="card post">
                <div class="card-top d-flex align-items-center p-1 my-1">
                    <img src="https://placehold.co/50x50" alt="" class="profile rounded-circle">
                    <div>
                        <strong class="m-2">زيد عبد الرحمن</strong>
                    </div>
                </div>

                <img src="https://placehold.co/250x160" alt="" class="post-img">
                <div class="actions p-2 border-bottom">
                    <ul class="d-flex">
                        <li class="p-1 m-1"><a href="#"><i class="fa-solid fa-heart text-danger"></i></a> +23
                        </li>
                        <li class="p-1 m-1"><a href="#"><i class="fa-solid fa-paper-plane"></i></a></li>
                    </ul>
                </div>
                <div class="description text-right p-2">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ
                </div>
            </div>
        </div>
        <div class="col-md-4 post-format mb-2">
            <div class="card post">
                <div class="card-top d-flex align-items-center p-1 my-1">
                    <img src="https://placehold.co/50x50" alt="" class="profile rounded-circle">
                    <div>
                        <strong class="m-2">زيد عبد الرحمن</strong>
                    </div>
                </div>

                <img src="https://placehold.co/250x160" alt="" class="post-img">
                <div class="actions p-2 border-bottom">
                    <ul class="d-flex">
                        <li class="p-1 m-1"><a href="#"><i class="fa-solid fa-heart text-danger"></i></a> +23
                        </li>
                        <li class="p-1 m-1"><a href="#"><i class="fa-solid fa-paper-plane"></i></a></li>
                    </ul>
                </div>
                <div class="description text-right p-2">
                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ
                </div>
            </div>
        </div>

    </div>
    @include('modals.story.story')
@endsection

@extends('layouts.master')

@section('content')
    <div class="best-image-form  my-3">
        <form method="post" action="{{route('best-images.store')}}" enctype="multipart/form-data" class="d-flex align-items-center pt-2 justify-content-between">
            @csrf
            <img src="https://placehold.co/40x40" alt="" class="profile rounded-circle">
            <input type="text" placeholder="اكتب وصف لصورتك هنا " class=" form-control mx-1">
            <label for="fileInput" class="file-input-label btn btn-info ms-1">
                <i class="fa-solid fa-cloud-arrow-up text-white mr-1" ></i>
            </label>
            <input type="file" id="fileInput" name="image" style="display: none;" accept="image/*" onchange="readURL(this);" required>
            <button type="submit" class="btn btn-dark text-white"><i class="fa-solid fa-paper-plane"></i></button>
        </form>
        <div class="file-upload-content position-relative">
            <img class="file-upload-image" src="#" alt="your image" style="" />
            <div class="image-title-wrap">
                <button type="button" onclick="removeUpload()" class="remove-image"><i class="fa-solid fa-x"></i></button>
            </div>
        </div>
    </div>
    <div class="row">
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

    <div class="my-3">

        <div class=" text-center">
            {{--     Images / Quiz / Posts           --}}
            <div class="row">
                @foreach($images as $image)
                    @include('best-images.image')
                @endforeach
            </div>
            {{--     Pagination           --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        {!! $images->links() !!}
                    </div>
                </div>
            </div>
        </div>

@endsection

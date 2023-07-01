@extends('layouts.master')

@section('content')
    <div class="best-image-form  my-3">
        <form method="post" action="{{route('best-images.store')}}" enctype="multipart/form-data" class="d-flex align-items-center pt-2 justify-content-between">
            @csrf

            <label for="fileInput" class="file-input-label text-white btn btn-dark mx-1 text-white mt-2 mb-1 fs-6" style="width: 100%">
                اختار احلى صورة لليوم
            </label>
            <input type="file" id="fileInput" name="image" style="display: none;" accept="image/*" onchange="readURL(this);" required>
            <button type="submit" class="text-white btn btn-dark mx-1 text-white mt-2 mb-1 fs-6"><i class="fa-solid fa-paper-plane"></i></button>
        </form>
        <div class="file-upload-content position-relative">
            <img class="file-upload-image" src="#" alt="your image" style="" />
            <div class="image-title-wrap">
                <button type="button" onclick="removeUpload()" class="remove-image"><i class="fa-solid fa-x"></i></button>
            </div>
        </div>
    </div>

    <div class="my-3">
        <div class=" text-center">
            <div class="row">
                @foreach($images as $image)
                    @include('best-images.image')
                @endforeach
            </div>

        </div>

@endsection

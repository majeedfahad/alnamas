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

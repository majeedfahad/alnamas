@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card m-3">
                <div class="card-header bg-dark ">
                    <h5 class="my-2 p-0 text-white">أجمل صورة</h5>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('best-images.store')}}" enctype="multipart/form-data">
                        @csrf


                        <div class="">

                            <div class="file-upload">
                                <div class="image-upload-wrap">
                                    <input id="image" name="image" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" required/>
                                    <div class="drag-text">
                                        <i class="fa-solid fa-image"></i>
                                        <h3>ارفع صورتك</h3>
                                    </div>
                                </div>
                                <div class="file-upload-content">
                                    <img class="file-upload-image" src="#" alt="your image" />
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload()" class="remove-image">حذف الصورة </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($errors->messages() as $error)
                            @foreach($error as $e)
                                <strong>{{$e}}</strong>
                            @endforeach
                        @endforeach

                        <div class="mt-3">
                            <button type="submit" class="btn btn-outline-info">اضافة</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection

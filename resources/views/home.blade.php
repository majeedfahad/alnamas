@extends('layouts.master')
@section('content')
    <div class="row">
        @include('includes.stories')
        <div class="col-md-4 post-format mb-2">
            <div class="card post">
                <div class="card-top d-flex align-items-center p-1 my-1">
                    <div>
                        <strong class="m-2">الأول من العالم في الصور أمس</strong>
                    </div>
                </div>

                <img src="https://placehold.co/250x160" alt="" class="post-img">
                <div class="actions p-2">

                </div>
            </div>
        </div>
        <div class="col-md-4 post-format mb-2">
            <div class="card post">
                <div class="card-top d-flex align-items-center p-1 my-1">
                    <div>
                        <strong class="m-2">الأول من العالم في المشي أمس</strong>
                    </div>
                </div>

                <img src="https://placehold.co/250x160" alt="" class="post-img">
                <div class="actions p-2">

                </div>
            </div>
        </div>
    </div>
    @include('modals.story.story')
@endsection

@extends('layouts.master')
@section('content')
    <div class="row">
        @include('includes.stories')

        <div class="col-md-4 post-format mb-2">
            <div class="card post">
                <div class="card-top d-flex align-items-center p-1 my-1">
                    <img src="https://placehold.co/50x50" alt="" class="profile rounded-circle">
                    <div>
                        <strong class="m-2">زيد عبد الرحمن</strong>
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

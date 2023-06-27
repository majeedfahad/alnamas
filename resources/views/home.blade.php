@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 d-flex">
            <div class="account-pics m-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="https://placehold.co/60x60" alt="" class="rounded-circle">
                <p>زيد عبدالرحمن</p>
            </div>
            <div class="account-pics m-2">
                <img src="https://placehold.co/60x60" alt="" class="rounded-circle">
                <p>زيد عبدالرحمن</p>
            </div>
            <div class="account-pics m-2">
                <img src="https://placehold.co/60x60" alt="" class="rounded-circle">
                <p>زيد عبدالرحمن</p>
            </div>
        </div>
    </div>

    @include('modals.story.story')

@endsection

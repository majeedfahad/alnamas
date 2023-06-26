@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12 d-flex">
            <div class="account-pics m-2">
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
    <div class="card m-3">

        <div class="card-body text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h2>{{ __('You are logged in!') }}</h2>
        </div>
    </div>

@endsection

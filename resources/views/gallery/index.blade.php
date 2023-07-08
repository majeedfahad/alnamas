@extends('layouts.master')

@section('content')
    <div class="my-3">
        <div class=" text-center">
            <div class="row">
                @foreach($images as $image)
                    @include('gallery.image')
                @endforeach
            </div>
        </div>
    </div>
    {{--     Pagination           --}}
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                {!! $images->links() !!}
            </div>
        </div>
    </div>

@endsection

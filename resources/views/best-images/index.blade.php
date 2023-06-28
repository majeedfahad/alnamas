@extends('layouts.master')

@section('content')

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

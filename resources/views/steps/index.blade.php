@extends('layouts.master')

@section('content')

    <div class="best-image-form  my-3">
        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#add-steps">
            <i class="fa-solid fa-cloud-arrow-up"></i>
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">الرياضي الخورافي</th>
                <th scope="col">خطواته</th>
            </tr>
        </thead>
        <tbody>
            @foreach($steps as $step)
                <tr>
                    <td>{{$step->user->name}}</td>
                    <td>{{$step->count}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

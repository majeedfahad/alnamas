@extends('layouts.master')

@section('content')

    <div class="card m-3">

        <div class="card-body text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="post" action="{{route('steps.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mt-3">
                    <label for="count">عدد الخطوات التي مشيتها هذا اليوم (تنقص او تزيد خطوة وحدة بس يصير علم مهب طيب)</label>
                    <input id="count" class="block mt-1 w-full" type="number" name="count" required/>
                </div>

                <div class="mt-3">
                    <label for="image">صورة التحقق من المصداقية والموثوقية والأمانة والعدالة</label>
                    <input id="image" class="block mt-1 w-full" type="file" name="image" required/>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-outline-info">اضافة</button>
                </div>
            </form>
        </div>
    </div>

@endsection

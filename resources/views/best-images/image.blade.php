<div class="col-md-4 mb-2">
    <div class="card post">
        <div class="card-top d-flex align-items-center p-1 my-1">
            <img src="https://placehold.co/50x50" alt="" class="profile rounded-circle">
            <div>
                <strong class="m-2">{{$image->user->name}}</strong>
            </div>
        </div>

        <img src="{{$image->getFirstMediaUrl()}}" alt="" class="post-img">
        <div class="actions p-2">
            <ul class="d-flex">
                <li class="p-1 m-1"><a href="{{route('best-images.toggleLike', ['image' => $image])}}"><i class="fa-solid fa-heart text-danger"></i></a> {{$image->likes()->count()}}
                </li>
                @can('vote', $image)
                <li class="p-1 m-1"><a href="{{route('best-images.vote', ['image' => $image])}}" class="btn btn-outline-info">تقييم</a>
                </li>
                @endcan
                @can('unvote', $image)
                <li class="p-1 m-1"><a href="{{route('best-images.unvote', ['image' => $image])}}" class="btn btn-outline-danger">إلغاء التقييم</a>
                </li>
                @endcan
            </ul>
        </div>
    </div>
</div>

<div class="col-md-4 mb-2">
    <div class="card post">
        <div class="card-top d-flex align-items-center p-1 my-1">
            <img src="{{$image->user->getFirstMediaUrl() != '' ? $image->user->getFirstMediaUrl() : 'https://placehold.co/50x50'}}"
                 class="profile rounded-circle" style="width: 50px; height: 50px">
            <div>
                <strong class="m-2">{{$image->user->name}}</strong>
            </div>
        </div>

        <img src="{{$image->getFirstMediaUrl()}}" alt="" class="post-img">
        <div class="actions p-2">
            <ul class="d-flex">
                <li class="p-1 m-1"><a href="{{route('best-images.toggleLike', ['image' => $image])}}">
                        @if($image->isLikedBy(auth()->user()))
                        <i class="fa-solid fa-heart text-danger"></i>
                        @else
                            <i class="fa-regular fa-heart text-danger"></i>
                        @endif
                    </a> {{$image->likes()->count()}}
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

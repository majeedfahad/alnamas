<div class="col-md-4 mb-2">
    <div class="card post">
        <div class="card-top d-flex align-items-center p-1 my-1">
            <img src="{{$image->user->getFirstMediaUrl() != '' ? $image->user->getFirstMediaUrl() : 'https://placehold.co/50x50'}}"
                 class="profile rounded-circle best-image" style="width: 50px; height: 50px" loading="lazy"
                 onclick="imageLoader(this)"
                 onload="imageLoader(this, false)"
            >
            <div>
                <strong class="m-2">{{$image->user->name}}</strong>
            </div>
        </div>

        <img src="{{asset('img/logo.png')}}" alt="loading" class="loader" id="loader">
        <img src="{{$image->getFirstMediaUrl()}}" alt="" class="post-img rounded best-image" id="post-img" style="height: 400px;
    object-fit: cover;"
             onclick="imageLoader(this)"
             onload="imageLoader(this, false)"
             loading="lazy">
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
                @can('delete', $image)
                    <form action="{{route('best-images.destroy', ['best_image' => $image])}}"
                          method="POST" id="image-delete-form"
                            onsubmit="showConfirm(event)">
                        @csrf
                        @method('DELETE')
                        <li class="p-1 m-1 show_confirm"><button type="submit" class="fa fa-trash" data-toggle="tooltip" style="font-size:15px;color:red; border: none;
    background: none;"></button></li>
                    </form>
                @endcan
            </ul>
        </div>
    </div>
</div>

<script>
    function showConfirm(event) {
        event.preventDefault();

        let confirmation = confirm('أكيد بتحذفها؟ ترا مافيه تراجع');

        if (confirmation) {
            event.target.submit();
        }
    }
</script>

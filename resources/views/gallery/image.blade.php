<div class="col-md-4 mb-2">
    <div class="card post" id="img-{{$image->id}}">
        <div class="card-top d-flex align-items-center p-1 my-1">
            <img
                src="{{$image->user->getFirstMediaUrl() != '' ? $image->user->getFirstMediaUrl() : 'https://placehold.co/50x50'}}"
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
                <li class="p-1 m-1">
                    <i class="fa-solid fa-heart text-danger"></i>
                    {{$image->likes()->count()}}
                </li>

            </ul>
        </div>
    </div>
</div>


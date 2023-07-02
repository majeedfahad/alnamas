<div class="col-12 d-flex stories" style="    overflow-x: scroll;">
    @foreach($events as $event)
        <div class="account-pics event m-2">
            <div class="account-pics m-2 ">
                <img src="{{$event->getFirstMediaUrl() != '' ? $event->getFirstMediaUrl() : "https://placehold.co/60x60"}}"
                     alt="" style="height: 60px; width: 60px" class="rounded-circle" onclick="imageLoader(this)">
                <p>{{$event->name}}</p>
            </div>
        </div>
    @endforeach
</div>

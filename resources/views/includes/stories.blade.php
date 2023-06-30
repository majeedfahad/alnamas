<div class="col-12 d-flex stories">
    @foreach($events as $event)
        <div class="account-pics m-2">
            <div class="account-pics m-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="{{$event->getFirstMediaUrl() != '' ? $event->getFirstMediaUrl() : "https://placehold.co/60x60"}}" alt="" style="height: 60px; width: 60px" class="rounded-circle">
                <p>{{$event->name}}</p>
            </div>
        </div>
    @endforeach
</div>

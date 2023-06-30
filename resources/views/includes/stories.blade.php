<div class="col-12 d-flex stories">
    @foreach($events as $event)
        <div class="account-pics m-2">
            <div class="account-pics m-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="https://placehold.co/60x60" alt="" class="rounded-circle">
                <p>{{$event->name}}</p>
            </div>
        </div>
    @endforeach
</div>

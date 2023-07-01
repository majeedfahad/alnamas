<div class="col-12 d-flex stories">
    <div class="account-pics add-event m-2">
        <div class="account-pics  m-2 ">
            <img src="https://placehold.co/60x60" alt="" style="height: 60px; width: 60px" class="rounded-circle">
            <p>إضافة فعالية</p>
        </div>
    </div>
    @foreach($events as $event)
        <div class="account-pics event m-2">
            <div class="account-pics m-2 ">
                <img src="{{$event->getFirstMediaUrl() != '' ? $event->getFirstMediaUrl() : "https://placehold.co/60x60"}}"
                     alt="" style="height: 60px; width: 60px" class="rounded-circle" onclick="document.getElementById('show-event-modal').src = this.src;">
                <p>{{$event->name}}</p>
            </div>
        </div>
    @endforeach
</div>

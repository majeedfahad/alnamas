<nav class="p-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-8">
                <a href="/"><img src="{{asset('/img/logo.png')}}" style="width: 60px"></a>
            </div>
            <div class="col-md-10  col-4">
                <ul class="justify-content-between d-flex">
                    <li>
                        <a class="nav-link nav-user mr-0" href="#" style="display: flex;align-items: center;">
                            <img
                                src="{{Auth::user()->getFirstMediaUrl() != '' ? Auth::user()->getFirstMediaUrl() : 'https://placehold.co/50x50'}}"
                            class="rounded-circle ml-1" style="width: 50px; height: 50px">
                            <span class="pro-user-name " id="username">
                                <span class="text-capitalize m-2">
                                    {{ Auth::user()->name }}
                                </span>
                            </span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>

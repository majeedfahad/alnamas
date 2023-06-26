<nav class="p-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <a href="/" class="m-2 d-block">Alnamas</a>
            </div>
            <div class="col-md-10 ">
                <ul class="justify-content-between d-flex">
                    <li>
                        <ul class="d-flex">
                            <li class="m-2"><a href="">link</a></li>
                            <li class="m-2"><a href="">link</a></li>
                            <li class="m-2"><a href="">link</a></li>
                            <li class="m-2"><a href="">link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link nav-user mr-0" href="#" style="display: flex;align-items: center;">
                            <span class="rounded-circle ml-1 rounded-username"></span>
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

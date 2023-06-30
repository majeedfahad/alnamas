<!--- Sidemenu -->
<div class="sidebar-menu d-flex flex-column justify-content-between d-none d-md-block" style="height: 100%">
    <div class="profile-avatar  text-center">
        <img src="https://placehold.co/90x90" alt="" class="rounded-circle">
        <p>زيد عبدالرحمن</p>
        <ul class="d-flex justify-content-around">
            <li>
                <a href="" class="d-block">123</a>
                المشاركات
            </li>
            |
            <li>
                <a href="" class="d-block">123</a>
                المتابعات
            </li>
            |
            <li>
                <a href="" class="d-block">123</a>
                النقاط
            </li>
        </ul>
    </div>
    <ul class="">
        <li class="mb-5">
            <a href="/">
                <i class="fa-solid fa-house-user"></i>
                <span> الرئيسية </span>
            </a>
        </li>
        <li class="mb-5">
            <a href="{{config('services.mulatham.url') . '/home'}}">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
                <span> اليحياوي الملثم </span>
            </a>
        </li>
        <li class="mb-5 d-flex justify-content-between">

            <a href="{{route('best-images.index')}}" >
                <i class="fa-solid fa-image"></i>
                <span> صورة اليوم </span>
            </a>
            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#add-image">
                <i class="fa-solid fa-cloud-arrow-up"></i>
            </a>
        </li>
        <li class="mb-5 d-flex justify-content-between">
            <a href="{{route('steps.index')}}">
                <i class="fa-solid fa-person-walking"></i>
                <span> تحدي المشي </span>
            </a>
            <i class="fa-solid fa-cloud-arrow-up"></i>
        </li>
    </ul>
    <div class="signOut"><a href="#" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">تسجيل الخروج</a></div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

</div>
<!-- End Sidebar -->


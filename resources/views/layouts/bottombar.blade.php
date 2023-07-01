<div class="bottom-bar d-block d-sm-none position-fixed" style="bottom: 30px">
    <ul>
        <li>
            <a href="{{config('services.mulatham.url') . '/home'}}">
                <i class="fa-solid fa-wand-magic-sparkles"></i>

                اليحياوي الملثم
            </a>
        </li>
        <li>
            <a href="{{route('best-images.index')}}" >
                <i class="fa-solid fa-image"></i>

                صورة اليوم
            </a>
        </li>

        <li>
            <a href="{{route('steps.index')}}">
                <i class="fa-solid fa-person-walking"></i>

                تحدي المشي
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-right-from-bracket"></i>

                خرووج
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>

@php
    $navLeft = config('menues.headerMenues.navLeft');
    $navRight = config('menues.headerMenues.navRight');
@endphp

<header>
    <div class="container d_flex">
        <nav class="d_flex debug">
            <ul class="d_flex">
                @foreach ($navLeft as $nav )

                <li><a class=" text-capitalize " href="{{$nav['link']}}">{{ $nav['genere'] }}</a></li>

                @endforeach
            </ul>
        </nav>
        <div class="logo d_flex debug">
            <img src="{{Vite::asset('resources/img/boolean-logo.png') }}" :alt="">
        </div>
        <nav class="d_flex debug" id="nav_right">
            <ul class="d_flex">
                @foreach ($navRight as $nav )

                <li><a href="{{$nav['link']}}"><i class="{{ $nav['icon'] }}"></i></a></li>

                @endforeach
            </ul>
        </nav>
    </div>
</header>

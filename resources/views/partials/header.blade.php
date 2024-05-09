<header>
    <div class="container d_flex">
        <nav class="d_flex debug">
            <ul class="d_flex">
                {{-- <li v-for="(nav, indice) in navLeft" :key="`nl-${indice}`"><a
                        :href="nav.link">{{ nav . genere }}</a></li> --}}
            </ul>
        </nav>
        <div class="logo d_flex debug">
            <img src="{{Vite::asset('resources/img/boolean-logo.png') }}" :alt="">
        </div>
        <nav class="d_flex debug" id="nav_right">
            <ul class="d_flex">
                {{-- <li v-for="(nav, indice) in navRight" :key="`nr-${indice}`"><a :href="nav.link"
                v-html="nav.icon"></a></li> --}}
            </ul>
        </nav>
    </div>
</header>

@php
    $lawPages = config('menues.footerMenues.lawPages');
    $icons = config('menues.footerMenues.icons');
@endphp

<footer>
    <div class="container d_flex">
        <div class="left_footer debug">
            <h3>Boolean s.r.l.</h3>
            <nav class="law_pages">
                <ul class="d_flex">
                    @foreach ($lawPages as $item )

                    <li ><a href="{{ $item['link'] }}">{{ $item['name'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="right_footer d_flex debug">
            <div class="social">
                <h5>Trovaci anche su </h5>
            </div>
            <nav class="icons">
                <ul class="d_flex">
                    @foreach ($icons as $icon )

                    <li>
                        <a href="{{url($icon['link'])}}" target="_blank"><i class="{{ $icon['img'] }}"></i></a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</footer>

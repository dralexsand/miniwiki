<li class="nav-item dropdown nav-item-left-border d-none d-sm-block">

    {{--<a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
        <img src="img/blank.gif" class="flag flag-us" alt="English"> English
        <i class="fas fa-angle-down"></i>
    </a>--}}

    @php
        $list_langs = $langs_info['list_langs'];
        $selected_lng = $langs_info['selected_lng'];
        $flag = $selected_lng == 'en' ? 'us' : $selected_lng;
    @endphp


    <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
        <img src="img/blank.gif" class="flag flag-{{ $flag }}" alt="{{ $selected_lng }}"> {{ $selected_lng }}
        <i class="fas fa-angle-down"></i>
    </a>

    <div id="langitems" class="dropdown-menu" aria-labelledby="dropdownLanguage">
        @foreach ($list_langs as $lang => $aliase)
            @php
                $flag = $lang;
                if($lang == 'en') $flag = 'us';
            @endphp
            <a id="{{ $lang }}" class="dropdown-item" href="">
                <img src="{{ asset('img/blank.gif') }}" class="flag flag-{{ $flag }}" alt="{{ $lang }}"> {{ $lang }}
            </a>
        @endforeach
    </div>
</li>

@php
    $translationsUi = $langs_info['translationsUi'];
@endphp
<nav class="collapse">
    <ul class="nav nav-pills" id="mainNav">
        <li class="dropdown">
            <a class="dropdown-item"
               href="articles">
                {{ $translationsUi['articles'] }}
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-item"
               href="contacts">
                {{ $translationsUi['contacts'] }}
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-item"
               href="about_us">
                {{ $translationsUi['about_us'] }}
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-item"
               href="help">
                {{ $translationsUi['help'] }}
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-item"
               href="search">
                {{ $translationsUi['search'] }}
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-item"
               href="post">
                Post
            </a>
        </li>
        @include('layouts.parts.lang')
    </ul>
</nav>

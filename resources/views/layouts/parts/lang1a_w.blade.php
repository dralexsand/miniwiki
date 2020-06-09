<li class="nav-item dropdown nav-item-left-border d-none d-sm-block">

    {{--<a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
        <img src="img/blank.gif" class="flag flag-us" alt="English"> English
        <i class="fas fa-angle-down"></i>
    </a>--}}

    <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
        <img src="img/blank.gif" class="flag flag-ru" alt="ru"> ru
        <i class="fas fa-angle-down"></i>
    </a>

    <div id="langitems" class="dropdown-menu" aria-labelledby="dropdownLanguage">
        <a id="ru" class="dropdown-item" href=""><img src="{{ asset('img/blank.gif') }}" class="flag flag-ru" alt="Russian"> ru</a>
        <a id="en" class="dropdown-item" href=""><img src="{{ asset('img/blank.gif') }}" class="flag flag-us" alt="English"> en</a>
        <a id="es" class="dropdown-item" href=""><img src="{{ asset('img/blank.gif') }}" class="flag flag-es" alt="Español"> es</a>
        <a id="fr" class="dropdown-item" href=""><img src="{{ asset('img/blank.gif') }}" class="flag flag-fr" alt="Française"> fr</a>
        <a id="de" class="dropdown-item" href=""><img src="{{ asset('img/blank.gif') }}" class="flag flag-de" alt="Deutch"> de</a>
    </div>
</li>

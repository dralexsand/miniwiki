@php
    $translationsUi = $langs_info['translationsUi'];
@endphp

<div id="home_search_field" class="input-group input-group-lg">
    <input class="form-control" placeholder="{{ $translationsUi['search'] }}..." name="s" id="s" type="text">
    <span class="input-group-append">
	    <button type="submit" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
	</span>
</div>

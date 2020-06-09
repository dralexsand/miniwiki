<header id="header" class="header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}"
        style="height: 104px;">
    <div class="header-body" style="position: fixed; top: 0px;">
        <div class="header-container container" style="height: 70px; min-height: 0px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo" style="width: 100px; height: 48px;">
                            <a href="/">
                                <img alt="MiniWiki" data-sticky-width="82" data-sticky-height="40" src="img/logo.png"
                                     style="top: 0px; width: 82px; height: 40px;" width="100" height="48">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div
                            class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                @include('layouts.parts.nav_home')
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                    data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="section section-default border-0 m-0">
    <div class="container py-4">

        <div class="row pb-4">
            <div class="col">

                @include('layouts.parts.home_search_field')

                {{--@php
                    $translationsUi = $langs_info['translationsUi'];
                @endphp

                <div id="home_search_field" class="input-group input-group-lg">
                    <input class="form-control" placeholder="{{ $translationsUi['search'] }}..." name="s" id="s" type="text">
                    <span class="input-group-append">
					    <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
					</span>
                </div>--}}

                {{--<form action="page-search-results.html" method="post">
                    <div class="input-group input-group-lg">
                        <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                        <span class="input-group-append">
						    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
						</span>
                    </div>
                </form>--}}

            </div>
        </div>

    </div>
</section>

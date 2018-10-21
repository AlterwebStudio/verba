<header class="page-head">
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate-light" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px" data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="bg-ebony-clay context-dark">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-aside-wrap">
                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside"><span></span></div>
                            <div class="rd-navbar-aside-content">
                                <ul class="rd-navbar-aside-group list-units">
                                    <li>
                                        <div class="unit flex-row unit-spacing-xs align-items-center">
                                            <div class="unit-left"><span class="icon icon-xxs icon-white fa-map-marker"></span></div>
                                            <div class="unit-body">Štefánikova 47, 811 04 Bratislava, Slovakia</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit flex-row unit-spacing-xs align-items-center">
                                            <div class="unit-left"><span class="icon icon-xxs icon-white fa-clock-o"></span></div>
                                            <div class="unit-body"><span class="time">Pon – Pia: 8:00 – 17:00. Víkendy a sviatky ZATVORENÉ</span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit flex-row unit-spacing-xs align-items-center">
                                            <div class="unit-left"><span class="icon icon-xxs icon-white fa-phone"></span></div>
                                            <div class="unit-body"><a class="link-secondary" href="tel:+421902312055"><h5>+421 902 312 055</h5></a></div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="rd-navbar-aside-group">
{{--                                    <ul class="list-inline list-inline-reset">
                                        <li><a class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-facebook" href="#"></a></li>
                                        <li><a class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-twitter" href="#"></a></li>
                                        <li><a class="icon icon-round icon-pciked-bluewood icon-xxs-smallest fa fa-google-plus" href="#"></a></li>
                                    </ul>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-inner">
                <div class="rd-navbar-group">
                    <div class="rd-navbar-panel">
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button><a class="rd-navbar-brand brand" href="/"><img src="images/logo.jpg" alt=""/></a>
                    </div>
                    <div class="rd-navbar-group-asside">
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-nav-inner">
                                <ul class="rd-navbar-nav">
                                    <li @if (request()->route()->uri=='/') class="active" @endif><a href="/">Domov</a></li>
                                    <li @if (request()->route()->uri=='sluzby') class="active" @endif><a href="{{ route('sluzby') }}">Služby</a></li>
                                    <li @if (request()->route()->uri=='manazment-kvality') class="active" @endif><a href="/manazment-kvality">Manažment kvality</a></li>
                                    <li @if (request()->route()->uri=='referencie') class="active" @endif><a href="/referencie">Referencie</a></li>
                                    <li @if (request()->route()->uri=='kontakt') class="active" @endif><a href="{{ route('kontakt') }}">Kontakt</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="rd-navbar-search">
                            <form class="rd-search" action="search-results.html" method="GET" data-search-live="rd-search-results-live" data-search-live-count="6">
                                <div class="rd-search-inner">
                                    <div class="form-wrap">
                                        <label class="form-label" for="rd-search-form-input">Vyhľadávanie...</label>
                                        <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                                    </div>
                                    <button class="rd-search-submit" type="submit"></button>
                                </div>
                                <div class="rd-search-results-live" id="rd-search-results-live"></div>
                            </form>
                            <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-search-wrap"></button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
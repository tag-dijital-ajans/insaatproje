<header id="header" class="header-narrow header-semi-transparent-light" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 1, "stickySetTop": "1"}'>
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-logo">
                        <img class="logo-default" alt="Porto" width="324" height="212" src="/{{$ayar->logo}}">
                        <a href="/">
                            <img class="logo-small" alt="Porto" width="131" height="48" src="/{{$ayar->favicon}}">
                        </a>
                    </div>
                </div>
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe">
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                <i class="fa fa-bars"></i>
                            </button>
                            <ul class="header-social-icons social-icons visible-lg">
                                <li class="social-icons-facebook"><a href="{{$ayar->facebook}}" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="{{$ayar->twitter}}" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="{{$ayar->linkedin}}" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li class="social-icons-youtube"><a href="{{$ayar->youtube}}" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>


                            </ul>
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
                                <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        @foreach($menuler as $menu)
                                        <li class="active">
                                            @if($menu->sayfa_id == 0)
                                                <a href="{{$menu->ozel_url}}">{{$menu->menu_baslik}}</a>


                                            @else


                                                <a href="/sayfa/{{$menu->sayfa_id}}/{{$menu->slug}}">{{$menu->menu_baslik}}</a>
                                            @endif
                                            @if($menu->altmenusu->count())

                                            @foreach($menu->altmenusu as $altmenu)

                                                @if ($altmenu->sayfa_id == 0)
                                                        <li><a href="{{$altmenu->ozel_url}}">{{$altmenu->menu_baslik}}</a></li>
                                                        @else

                                            <ul class="dropdown-menu">

                                                <li><a href="/sayfa/{{$altmenu->sayfa_id}}/{{$altmenu->slug}}">{{$altmenu->menu_baslik}}</a></li>
                                                @endif
                                                @endforeach

                                            </ul>
                                                    @endif

                                            @endforeach
                                                    <li>
                                                        <a href="{{route('hakkimizda.goster')}}">Hakkımızda</a>
                                                    </li>
                                                        <li>
                                                            <a href="{{route('projeleri.goster')}}">Projeler</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('haberler.goster')}}">Haberler</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('iletisim.formu')}}">İLETİŞİM</a>
                                                        </li>
                                                <li>
                                                    <a href="{{route('galeriler.goster')}}">GALERİ</a>
                                                </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


{{--
<!-- Header desktop -->
<nav class="container-header-desktop">
    <div class="top-bar">
        <div class="content-topbar container flex-sb-c h-full">
            <div class="size-w-0 flex-wr-s-c">
                <div class="t1-s-1 cl-13 m-r-50">
							<span class="fs-16 m-r-6">
								<i class="fa fa-home" aria-hidden="true"></i>
							</span>
                    <span>{{$ayar->firma_adres}}</span>
                </div>

                <div class="t1-s-1 cl-13 m-r-50">
							<span class="fs-16 m-r-6">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>
                    <span>({{$ayar->telefon}}</span>
                </div>

                <div class="t1-s-1 cl-13 m-r-50">
							<span class="fs-16 m-r-6">
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</span>
                    <span>Pzrts-Cmrts 09:00 sbh - 17:00 aksm/Pazar KAPALI</span>
                </div>
            </div>

            <div class="text-nowrap">
                <a href="{{$ayar->facebook}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-facebook-official"></i>
                </a>

                <a href="{{$ayar->twitter}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-twitter"></i>
                </a>

                <a href="{{$ayar->pinterest}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-google-plus"></i>
                </a>

                <a href="{{$ayar->instagram}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-instagram"></i>
                </a>

                <a href="{{$ayar->linkedin}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="wrap-menu-desktop">
        <div class="limiter-menu-desktop container">
            <!-- Logo desktop -->
            <div class="logo" >
                <a href="/"><img  src="/{{$ayar->logo}}" alt="LOGO" ></a>
            </div>

            <!-- Menu desktop -->
            <div class="menu-desktop">
                <ul class="main-menu respon-sub-menu">
                    @foreach($menuler as $menu)
                        <li>

                            @if($menu->sayfa_id == 0)
                        <a href="{{$menu->ozel_url}}">{{$menu->menu_baslik}}</a>

                            @else
                        <a href="/sayfa/{{$menu->sayfa_id}}/{{$menu->slug}}">{{$menu->menu_baslik}}</a>
                            @endif
                        @if($menu->altmenusu->count())
                        <ul class="sub-menu">
                            @foreach($menu->altmenusu as $altmenu)

                                @if ($altmenu->sayfa_id == 0)
                                    <li><a href="{{$altmenu->ozel_url}}">{{$altmenu->menu_baslik}}</a></li>
                                    @else
                            <li><a href="/sayfa/{{$altmenu->sayfa_id}}/{{$altmenu->slug}}">{{$altmenu->menu_baslik}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        @endif

                    </li>

                    @endforeach

                        <li>
                            <a href="{{route('hizmetleri.goster')}}">Hizmetler</a>
                        </li>
                        <li>
                            <a href="{{route('haberler.goster')}}">Haberler</a>
                        </li>
                    <li>
                        <a href="{{route('iletisim.formu')}}">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Header Mobile -->
<nav class="container-header-mobile">
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="/{{$ayar->logo}}" alt="LOGO"></a>
        </div>


        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
        </div>
    </div>

    <div class="menu-mobile">
        <ul class="top-bar-m p-l-20 p-tb-8">
            <li>
                <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-home" aria-hidden="true"></i>
							</span>
                    <span>379 5Th Ave New York, Nyc 10018</span>
                </div>
            </li>

            <li>
                <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>
                    <span>(+1) 96 716 6879</span>
                </div>
            </li>

            <li>
                <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</span>
                    <span>Mon-Sat 09:00 am - 17:00 pm/Sunday CLOSE</span>
                </div>
            </li>

            <li>
                <div>
                    <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class="fa fa-facebook-official"></i>
                    </a>

                    <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class="fa fa-google-plus"></i>
                    </a>

                    <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
--}}

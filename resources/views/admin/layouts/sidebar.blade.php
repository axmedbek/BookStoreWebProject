<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item"><a href="{{ route('admin_page') }}"><i class="icon-home3"></i><span data-i18n="nav.dash.main"
                                                                                       class="menu-title">Dashboard</span><span
                            class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span></a>
            </li>

            <li class="nav-item"><a href="{{ route('admin_category') }}"><i class="icon-folder3"></i><span data-i18n="nav.menu_levels.main"
                                                                            class="menu-title">Kateqoriyalar</span></a>
            </li>

            <li class="nav-item"><a href="javascript:void(0)"><i class="icon-gears"></i><span data-i18n="nav.menu_levels.main"
                                                                                       class="menu-title">Ayarlar</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('msk_cities')  }}" data-i18n="nav.menu_levels.second_level" class="menu-item">Şəhərlər</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- / main menu-->

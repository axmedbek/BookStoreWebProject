<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="{{ trans('messages.sidebar.search') }}" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item"><a href="{{ route('admin_page',['locale' => app()->getLocale()]) }}"><i class="icon-home3"></i><span data-i18n="nav.dash.main"
                                                                                       class="menu-title">{{ trans('messages.sidebar.dashboard') }}</span><span
                            class="tag tag tag-primary tag-pill float-xs-right mr-2">2</span></a>
            </li>
            <li class="nav-item"><a href="{{ route('book.admin',['locale' => app()->getLocale()]) }}"><i class="icon-book2"></i><span data-i18n="nav.menu_levels.main"
                                                                                                           class="menu-title">{{ trans('messages.sidebar.books') }}</span></a>
            </li>
            <li class="nav-item"><a href="{{ route('orders.admin',['locale' => app()->getLocale()]) }}"><i class="icon-check-square-o"></i><span data-i18n="nav.menu_levels.main"
                                                                                                                                      class="menu-title">{{ trans('messages.sidebar.orders') }}</span></a>
            </li>
            <li class="nav-item"><a href="{{ route('users.admin',['locale' => app()->getLocale()]) }}"><i class="icon-users3"></i><span data-i18n="nav.menu_levels.main"
                                                                                                           class="menu-title">{{ trans('messages.sidebar.users') }}</span></a>
            </li>
            <li class="nav-item"><a href="{{ route('category.admin',['locale' => app()->getLocale()]) }}"><i class="icon-folder3"></i><span data-i18n="nav.menu_levels.main"
                                                                            class="menu-title">{{ trans('messages.sidebar.categories') }}</span></a>
            </li>
            <li class="nav-item"><a href="{{ route('publisher.admin',['locale' => app()->getLocale()]) }}"><i class="icon-pen3"></i><span data-i18n="nav.menu_levels.main"
                                                                                                           class="menu-title">{{ trans('messages.sidebar.publishers') }}</span></a>
            </li>
            <li class="nav-item"><a href="javascript:void(0)"><i class="icon-gears"></i><span data-i18n="nav.menu_levels.main"
                                                                                       class="menu-title">{{ trans('messages.sidebar.settings.name') }}</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('msk_writers',['locale' => app()->getLocale()])  }}" data-i18n="nav.menu_levels.second_level" class="menu-item">{{ trans('messages.sidebar.settings.menu.writers') }}</a>
                    </li>
                    <li><a href="{{ route('msk_book_langs',['locale' => app()->getLocale()])  }}" data-i18n="nav.menu_levels.second_level" class="menu-item">{{ trans('messages.sidebar.settings.menu.book_langs') }}</a>
                    </li>
                    <li><a href="{{ route('msk_book_statuses',['locale' => app()->getLocale()])  }}" data-i18n="nav.menu_levels.second_level" class="menu-item">{{ trans('messages.sidebar.settings.menu.book_statuses') }}</a>
                    </li>
                    <li><a href="{{ route('msk_cities',['locale' => app()->getLocale()])  }}" data-i18n="nav.menu_levels.second_level" class="menu-item">{{ trans('messages.sidebar.settings.menu.cities') }}</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- / main menu-->

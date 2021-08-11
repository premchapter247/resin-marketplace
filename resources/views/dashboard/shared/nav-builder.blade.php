<div class="c-sidebar-brand">
    <img class="c-sidebar-brand-full" src="{{ url('/assets/brand/coreui-base-white.svg') }}" width="118" height="46"
        alt="CoreUI Logo">
    <img class="c-sidebar-brand-minimized" src="{{ url('assets/brand/coreui-signet-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
</div>
<ul class="c-sidebar-nav ps ps--active-y">
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link {{ request()->is('/') ? 'c-active' : '' }}" href="{{url('/')}}">
            <i class="cil-speedometer c-sidebar-nav-icon"></i>
            Dashboard
        </a>
    </li>
    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i
                class="cil-user c-sidebar-nav-icon"></i>User management</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link {{ request()->is('/users') ? 'c-active' : '' }}" href="{{url('/users')}}"><span class="c-sidebar-nav-icon"></span>Users</a></li>
        </ul>
    </li>
    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i
                class="cil-calculator c-sidebar-nav-icon"></i>Email management</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link {{ request()->is('/mail') ? 'c-active' : '' }}" href="{{url('/mail')}}"><span class="c-sidebar-nav-icon"></span>Email</a></li>
        </ul>
    </li>
    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i
                class="cil-calculator c-sidebar-nav-icon"></i>Product Management</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#"><span class="c-sidebar-nav-icon"></span>Product</a></li>
        </ul>
    </li>
    <!-- <li class="c-sidebar-nav-title">
        Theme
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/colors">
            <i class="cil-drop1 c-sidebar-nav-icon"></i>
            Colors
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/typography">
            <i class="cil-pencil c-sidebar-nav-icon"></i>
            Typography
        </a>
    </li>
    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i
                class="cil-puzzle c-sidebar-nav-icon"></i>Base</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/breadcrumb"><span class="c-sidebar-nav-icon"></span>Breadcrumb</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/base/cards"><span
                        class="c-sidebar-nav-icon"></span>Cards</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/carousel"><span class="c-sidebar-nav-icon"></span>Carousel</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/collapse"><span class="c-sidebar-nav-icon"></span>Collapse</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/base/forms"><span
                        class="c-sidebar-nav-icon"></span>Forms</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/jumbotron"><span class="c-sidebar-nav-icon"></span>Jumbotron</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/list-group"><span class="c-sidebar-nav-icon"></span>List group</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/base/navs"><span
                        class="c-sidebar-nav-icon"></span>Navs</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/pagination"><span class="c-sidebar-nav-icon"></span>Pagination</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/popovers"><span class="c-sidebar-nav-icon"></span>Popovers</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/progress"><span class="c-sidebar-nav-icon"></span>Progress</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/scrollspy"><span class="c-sidebar-nav-icon"></span>Scrollspy</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/switches"><span class="c-sidebar-nav-icon"></span>Switches</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/base/tables"><span
                        class="c-sidebar-nav-icon"></span>Tables</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/base/tabs"><span
                        class="c-sidebar-nav-icon"></span>Tabs</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/base/tooltips"><span class="c-sidebar-nav-icon"></span>Tooltips</a></li>
        </ul>
    </li>
    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i
                class="cil-cursor c-sidebar-nav-icon"></i>Buttons</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/buttons/buttons"><span class="c-sidebar-nav-icon"></span>Buttons</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/buttons/button-group"><span class="c-sidebar-nav-icon"></span>Buttons
                    Group</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/buttons/dropdowns"><span class="c-sidebar-nav-icon"></span>Dropdowns</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/buttons/brand-buttons"><span class="c-sidebar-nav-icon"></span>Brand
                    Buttons</a></li>
        </ul>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/charts">
            <i class="cil-chart-pie c-sidebar-nav-icon"></i>
            Charts
        </a>
    </li>
    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i
                class="cil-star c-sidebar-nav-icon"></i>Icons</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/icon/coreui-icons"><span class="c-sidebar-nav-icon"></span>CoreUI
                    Icons</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/icon/flags"><span
                        class="c-sidebar-nav-icon"></span>Flags</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/icon/brands"><span
                        class="c-sidebar-nav-icon"></span>Brands</a></li>
        </ul>
    </li>
    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i
                class="cil-bell c-sidebar-nav-icon"></i>Notifications</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/notifications/alerts"><span class="c-sidebar-nav-icon"></span>Alerts</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/notifications/badge"><span class="c-sidebar-nav-icon"></span>Badge</a>
            </li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                    href="http://127.0.0.1:8000/notifications/modals"><span class="c-sidebar-nav-icon"></span>Modals</a>
            </li>
        </ul>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/widgets">
            <i class="cil-calculator c-sidebar-nav-icon"></i>
            Widgets
        </a>
    </li>
    <li class="c-sidebar-nav-title">
        Extras
    </li>
    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#"><i
                class="cil-star c-sidebar-nav-icon"></i>Pages</a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/login"><span
                        class="c-sidebar-nav-icon"></span>Login</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/register"><span
                        class="c-sidebar-nav-icon"></span>Register</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/404"><span
                        class="c-sidebar-nav-icon"></span>Error 404</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="http://127.0.0.1:8000/500"><span
                        class="c-sidebar-nav-icon"></span>Error 500</a></li>
        </ul>
    </li> -->
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 519px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 420px;"></div>
    </div>
</ul>
<!-- <ul class="c-sidebar-nav">
        @if(isset($appMenus['sidebar menu']))
            @foreach($appMenus['sidebar menu'] as $menuel)
                @if($menuel['slug'] === 'link')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="{{ url($menuel['href']) }}">
                        @if($menuel['hasIcon'] === true)
                            @if($menuel['iconType'] === 'coreui')
                                <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
                            @endif
                        @endif
                        {{ $menuel['name'] }}
                        </a>
                    </li>
                @elseif($menuel['slug'] === 'dropdown')
                    <?php //renderDropdown($menuel) ?>
                @elseif($menuel['slug'] === 'title')
                    <li class="c-sidebar-nav-title">
                        @if($menuel['hasIcon'] === true)
                            @if($menuel['iconType'] === 'coreui')
                                <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
                            @endif
                        @endif
                        {{ $menuel['name'] }}
                    </li>
                @endif
            @endforeach
        @endif
        </ul> -->
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
    data-class="c-sidebar-minimized"></button>
</div>
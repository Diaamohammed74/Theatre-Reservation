<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('dashboard.dashboard.index')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <!--A side Logo-->
            @include('back.partials.asideLogo')
            <!--A side Logo-->
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Home</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a> 
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->routeIs('dashboard.reserve.*') ? 'active' : '' }}">
            <a href="{{ route('dashboard.reserve.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Analytics">Reservations</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('dashboard.movies.*') ? 'active' : '' }}">
            <a href="{{ route('dashboard.movies.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-movie"></i>
                <div data-i18n="Analytics">Movies</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('dashboard.event-days.*') ? 'active' : '' }}">
            <a href="{{ route('dashboard.event-days.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar-star"></i>
                <div data-i18n="Analytics">Event Days</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('dashboard.time-slots.*') ? 'active' : '' }}">
            <a href="{{ route('dashboard.time-slots.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time"></i>
                <div data-i18n="Analytics">Time Slots</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('dashboard.show-times.*') ? 'active' : '' }}">
            <a href="{{ route('dashboard.show-times.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time-five"></i>
                <div data-i18n="Analytics">Show Times</div>
            </a>
        </li>
    </ul>
    
</aside>

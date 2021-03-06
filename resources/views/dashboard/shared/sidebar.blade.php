<div class="c-sidebar c-sidebar-dark c-sidebar-lg-show c-sidebar-fixed" id="sidebar">
    <div class="c-sidebar-brand my-sider-brand">
       <img src="{{ asset('img/7days-Logo-gold.png') }}" alt="main-logo" class="c-sidebar-brand-full" width="118" height="46">
       <img src="{{ asset('img/7days-Logo-gold-only.png') }}" alt="main-logo" class="c-sidebar-brand-minimized" width="80" height="40">
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon cil-speedometer"></i>Dashboard
            </a>
        </li>
        {{-- <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon cil-user"></i>User
            </a>
        </li> --}}

        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
            <a href="#" class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle">
                <i class="c-sidebar-nav-icon cil-group"></i>User Management
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="#" class="c-sidebar-nav-link">
                        <i class="c-sidebar-nav-icon cil-power-standby"></i>Roles
                    </a>
                    <a href="#" class="c-sidebar-nav-link">
                        <i class="c-sidebar-nav-icon cil-lock-unlocked"></i>Permissions
                    </a>
                    <a href="#" class="c-sidebar-nav-link">
                        <i class="c-sidebar-nav-icon cil-user"></i>Users
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
            <a href="#" class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle">
                <i class="c-sidebar-nav-icon cil-balance-scale"></i>{{ __("Cities") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{ route('citymasters.index') }}" class="c-sidebar-nav-link">
                        <i class="c-sidebar-nav-icon cib-superuser"></i>{{ __("City Master") }}
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
            <a href="#" class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle">
                <i class="c-sidebar-nav-icon cil-balance-scale"></i>{{ __("Packages") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{ route('packagemasters.index') }}" class="c-sidebar-nav-link">
                        <i class="c-sidebar-nav-icon cib-superuser"></i>{{ __("Package Master") }}
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
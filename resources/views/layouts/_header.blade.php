<header class="main-header">
    <div class="logo">
        <figure class="figure">
            <a href="#"><img class="figure-img img-fluid" src="{{ asset('img/7days-Logo-gold.png') }}" alt="Main Logo"></a>
        </figure>
    </div>
    <div class="menu-content">
        <div class="ham">
            <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon">
                <span class="menu-icon__line"></span>
            </label>
        </div>

        <ul class="nav-links">
            <li class="nav-link">
                <a href="{{ route('index') }}">{{ __('Home') }}</a>
            </li>
            <li class="nav-link">
                <a href="#">{{ __("Tour Package") }}</a>
            </li>
            <li class="nav-link">
                <a href="#">{{ __("About Us") }}</a>
            </li>
            <li class="nav-link">
                <a href="#">{{ __("Contact") }}</a>
            </li>
            <li class="nav-link">
                <a href="#">{{ __("Inquery") }}</a>
            </li>
        </ul>
    </div>
</header>

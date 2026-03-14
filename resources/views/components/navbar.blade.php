<!-- ── NAV ── -->
<nav id="nav">
    <a href="{{ route('home') }}">
        <img src="images/nissi-logo-colored.png" alt="Nissi Logo" class="w-40 h-10" />
    </a>

    <ul class="nav-links">
        <li><a href="{{ route('home') }}#about">About</a></li>
        <li><a href="{{ route('home') }}#services">Services</a></li>
        <li><a href="{{ route('home') }}#products">Products</a></li>
        <li><a href="{{ route('home') }}#clients">Clients</a></li>
        <li><a href="{{ route('home') }}#contact">Contact</a></li>
    </ul>

    <a href="mailto:info@nissitechnologies.com" class="nav-btn hidden md:inline-block">Get in touch</a>

    <!-- Hamburger (mobile only) -->
    <button class="nav-hamburger" id="navHamburger" aria-label="Open menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
</nav>

<!-- Backdrop -->
<div class="nav-backdrop" id="navBackdrop"></div>

<!-- Slide-in Drawer -->
<div class="nav-drawer" id="navDrawer">
    <div class="nav-drawer-header">
        <img src="images/nissi-logo-colored.png" alt="Nissi Logo" class="w-32 h-8" />
        <button class="nav-drawer-close" id="navClose" aria-label="Close menu">
            <span></span>
            <span></span>
        </button>
    </div>
    <ul class="nav-drawer-links">
        <li><a href="{{ route('home') }}#about">About</a></li>
        <li><a href="{{ route('home') }}#services">Services</a></li>
        <li><a href="{{ route('home') }}#products">Products</a></li>
        <li><a href="{{ route('home') }}#clients">Clients</a></li>
        <li><a href="{{ route('home') }}#contact">Contact</a></li>
    </ul>
    <a href="mailto:info@nissitechnologies.com" class="nav-drawer-btn">Get in touch</a>
</div>
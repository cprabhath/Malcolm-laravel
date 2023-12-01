<header>
    <div class="nav-wrapper">
        <div class="logo-container">
            <img class="logo" src="{!! asset('images/Logo.png') !!}" alt="Logo" loading="lazy">
        </div>
        <nav>
            <input class="hidden" type="checkbox" id="menuToggle">
            <label class="menu-btn" for="menuToggle">
                <div class="menu"></div>
                <div class="menu"></div>
                <div class="menu"></div>
            </label>
            <div class="nav-container">
                <ul class="main-nav-tab">
                    <li class="nav-tab"><a href="/" wire:navigate
                        class="{{ Route::is('home') ? 'Nav-active' : '' }}">Home</a></li>
                    <li class="nav-tab"><a href="/about" wire:navigate
                            class="{{ Route::is('about') ? 'Nav-active' : '' }}">About</a></li>
                    <li class="nav-tab"><a href="/services" wire:navigate
                            class="{{ Route::is('services') ? 'Nav-active' : '' }}">Services</a></li>
                    <li class="nav-tab"><a href="/prices" wire:navigate
                            class="{{ Route::is('prices') ? 'Nav-active' : '' }}">Price</a></li>
                    <li class="nav-tab"><a href="/gallery" wire:navigate
                            class="{{ Route::is('gallery') ? 'Nav-active' : '' }}">Gallery</a></li>
                    <li class="nav-tab"><a href="/contact" wire:navigate
                            class="{{ Route::is('contact') ? 'Nav-active' : '' }}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

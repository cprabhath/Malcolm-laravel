<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malcolm Lismore | Admin</title>
    <link rel="shortcut icon" href="{!! asset('images/admin/favicon.ico') !!}" type="image/x-icon">
    @include('livewire.admin.libraries.styles')
</head>

<body>
    <div class="inner-items hide">
        <div class="header">
            <div>
                Welcome <b>{{ Auth::user()->name }}</b>
            </div>
        </div>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="/admin/dashboard" class="nav_logo" wire:navigate>
                        <i class="bx bx-cog nav_logo-icon"></i>
                        <span class="nav_logo_name">Administrator</span>
                    </a>
                    <div class="nav_list">
                        <a href="/admin/dashboard" class="nav_link  {{ Route::is('dashboard') ? 'active' : '' }}"
                            wire:navigate>
                            <i class="bx bx-grid-alt nav_icon"></i>
                            <span class="nav_name">Dashboard</span>
                        </a>
                        <a href="/admin/main" class="nav_link {{ Route::is('main-page') ? 'active' : '' }}"
                            wire:navigate>
                            <i class='bx bx-home-alt-2 nav_icon'></i>
                            <span class="nav_name">Main page</span>
                        </a>
                        <a href="/admin/about" class="nav_link {{ Route::is('about-page') ? 'active' : '' }}"
                            wire:navigate>
                            <i class='bx bx-info-circle nav_icon'></i>
                            <span class="nav_name">About page</span>
                        </a>
                        <a href="/admin/services" class="nav_link {{ Route::is('services-page') ? 'active' : '' }}"
                            wire:navigate>
                            <i class='bx bx-task nav_icon'></i>
                            <span class="nav_name">Services Page</span>
                        </a>
                        <a href="/admin/prices" class="nav_link {{ Route::is('prices-page') ? 'active' : '' }}"
                            wire:navigate>
                            <i class='bx bx-dollar nav_icon'></i>
                            <span class="nav_name">Prices Page</span>
                        </a>
                        <a href="/admin/gallery" class="nav_link {{ Route::is('gallery-page') ? 'active' : '' }}"
                            wire:navigate>
                            <i class='bx bx-layout nav_icon'></i>
                            <span class="nav_name">Gallery Page</span>
                        </a>
                        <a href="/admin/contact" class="nav_link {{ Route::is('contact-page') ? 'active' : '' }}"
                            wire:navigate>
                            <i class='bx bx-mobile-alt nav_icon'></i>
                            <span class="nav_name">Contact Page</span>
                        </a>
                        <a href="/admin/settings" class="nav_link {{ Route::is('settings-page') ? 'active' : '' }}"
                            wire:navigate>
                            <i class="bx bx-cog nav_icon"></i>
                            <span class="nav_name">Settings</span>
                        </a>
                    </div>
                </div>
                <livewire:admin.components.logout />
            </nav>
        </div>
        <div class="main">
            {{ $slot }}
        </div>
    </div>
    @include('livewire.admin.libraries.scripts')
</body>
</html>

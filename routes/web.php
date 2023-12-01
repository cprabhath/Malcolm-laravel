<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Common\Welcome;
use App\Livewire\Common\Contact;
use App\Livewire\Common\Gallery;
use App\Livewire\Common\Prices;
use App\Livewire\Common\Services;
use App\Livewire\Common\About;

use App\Livewire\Admin\Login;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\AboutContent;
use App\Livewire\Admin\ContactContent;
use App\Livewire\Admin\GalleryContent;
use App\Livewire\Admin\MainContent;
use App\Livewire\Admin\PassResetMethod;
use App\Livewire\Admin\PricesContent;
use App\Livewire\Admin\RequireCodes;
use App\Livewire\Admin\ResetPassword;
use App\Livewire\Admin\ServicesContent;
use App\Livewire\Admin\SettingsContent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// common routes
Route::get('/', Welcome::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/services', Services::class)->name('services');
Route::get('/prices', Prices::class)->name('prices');
Route::get('/gallery', Gallery::class)->name('gallery');
Route::get('/contact', Contact::class)->name('contact');

// admin routes
Route::get('/admin', Login::class)->name('login');
Route::get('/admin/require', RequireCodes::class)->name('code-require');
Route::get('/admin/reset-method', PassResetMethod::class);
Route::get('/admin/reset-password', ResetPassword::class)->name('reset-pass');
Route::prefix('admin')->group(function(){
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/main', MainContent::class)->name('main-page');
        Route::get('/about', AboutContent::class)->name('about-page');
        Route::get('/services', ServicesContent::class)->name('services-page');
        Route::get('/prices', PricesContent::class)->name('prices-page');
        Route::get('/gallery', GalleryContent::class)->name('gallery-page');
        Route::get('/contact', ContactContent::class)->name('contact-page');
        Route::get('/settings', SettingsContent::class)->name('settings-page');
    });
});


<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('back/controllers/{id}', function(string $id){
    return ;
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
    
    Route::get('/recruiterdashboard', function () {
        return view('RecruiterDashboard', ['dash' => 'recruiterdashboard']);
    })->name('recruiterdashboard');

    Route::get('/jobseekerdashboard', function () {
        return view('JobSeekerDashboard', ['dash' => 'jobseekerdashboard']);
    })->name('jobseekerdashboard');
    Route::get('/dashboard', function () {
        return view('dashboard', ['dash' => 'dashboard']);
    })->name('dashboard');
    Route::get('/jobseekerdashboard/acme', function () {
        return view('acme');
    })->name('acme');
});

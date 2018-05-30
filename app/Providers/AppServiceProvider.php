<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $setting = Setting::pluck('value', 'key');
        if (isset($setting)) {
            $setting['site_logo'] = isset($setting['site_logo']) ? $setting['site_logo'] : config('constants.site_logo');
            $setting['site_name'] = isset($setting['site_name']) ? $setting['site_name'] : config('constants.site_name');
            $setting['site_favicon'] = isset($setting['site_favicon']) ? $setting['site_favicon'] : config('constants.site_favicon');
            $setting['footer_text'] = isset($setting['footer_text']) ? $setting['footer_text'] : config('constants.footer_text');
        }

        View::share(['settings' => $setting]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

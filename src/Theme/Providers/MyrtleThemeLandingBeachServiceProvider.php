<?php

namespace Myrtle\Themes\Landing\Beach\Theme\Providers;

use Illuminate\Support\ServiceProvider;

class MyrtleThemeLandingBeachServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
			base_path(). '/vendor/agilesdesign/myrtle-core-theme-landing-beach/src/public' => public_path(),
		], 'public');
    }
}

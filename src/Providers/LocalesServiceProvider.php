<?php

namespace HassanKerdash\Laravel\Locales\Providers;

use Illuminate\Support\ServiceProvider;
use HassanKerdash\Laravel\Locales\Commands\LanguagePublishCommand;

class LocalesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(LanguagePublishCommand::class);
    }
}

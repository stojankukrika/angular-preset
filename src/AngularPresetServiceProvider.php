<?php

namespace Walteribeiro\AngularPreset;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

/**
 * User: Stojan Kukrika
 * Email: stojan.kukrika@gmail.com
 */
class AngularPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('angular', function ($command) {
            AngularPreset::install(false);
            $command->info('Angular 5 scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }

}
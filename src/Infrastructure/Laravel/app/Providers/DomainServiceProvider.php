<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\GeoCoding\Adapter\Output\GeoCodingSettings;
use Domain\GeoCoding\Port\Input\GeoCodingSettings as GeoCodingSettingsInterface;

class DomainServiceProvider extends ServiceProvider
{
    /** @var array<class-string,class-string> */
    public $bindings = [
        GeoCodingSettingsInterface::class => GeoCodingSettings::class,
    ];

    /** @return void */
    public function register()
    {
        //
    }

    /** @return void */
    public function boot()
    {
        //
    }
}

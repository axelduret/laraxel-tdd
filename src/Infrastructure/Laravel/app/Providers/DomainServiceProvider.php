<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GeoCoding\Adapter\GeoCodingSettings;
use Domain\GeoCoding\Port\GeoCodingSettings as GeoCodingSettingsInterface;

class DomainServiceProvider extends ServiceProvider
{
    /** @var array<class-string,class-string> */
    public $bindings = [
        GeoCodingSettingsInterface::class => GeoCodingSettings::class,
    ];

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        //
    }
}

<?php

declare(strict_types=1);

namespace App\Services\GeoCoding\Adapter;

use Domain\GeoCoding\Port\GeoCodingSettings as GeoCodingSettingsInterface;

class GeoCodingSettings implements GeoCodingSettingsInterface
{
    public function url(string $url): string
    {
        return $url;
    }

    public function parameters(array $attributes): array
    {
        return $attributes;
    }
}

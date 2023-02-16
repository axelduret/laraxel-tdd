<?php

declare(strict_types=1);

namespace App\Domain\GeoCoding\Adapter\Output;

use Domain\GeoCoding\Port\Input\GeoCodingSettings as GeoCodingSettingsInterface;

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

<?php

declare(strict_types=1);

namespace Domain\GeoCoding\Port;

interface GeoCodingSettings
{
    /**
     * @param  string $url
     * @return string
     */
    public function url(string $url): string;

    /**
     * @param  array<string,string> $attributes
     * @return array<string,string>
     */
    public function parameters(array $attributes): array;
}

<?php

declare(strict_types=1);

namespace App\Services\GeoCoding\Query;

use Domain\GeoCoding\Port\GeoCodingSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

final class GeocodingSearchQuery
{
    public function __construct(private readonly GeoCodingSettings $settings)
    {
    }

    // TODO Add reverse search.
    // TODO Add more parameters.

    /** @return array<string,string> */
    public function handle(Request $request): array
    {
        $url = $this->settings->url(config('geocoding.url'));

        /** @var array<string,string> */
        $parameters = $this->settings->parameters([
            'format' => config('geocoding.format') ?? '',
            'street' => $request->validated('street') ?? '',
            'postalcode' => $request->validated('postalcode') ?? '',
            'city' => $request->validated('city') ?? '',
            'country' => $request->validated('country') ?? '',
        ]);

        $query = Http::get(
            url: $url,
            query: $parameters,
        );

        // TODO Add formating response options.

        return  [
            'success' => $query->ok(),
            'status' => $query->status(),
            'lat' => $query->json(0)['lat'] ?? null,
            'lon' => $query->json(0)['lon'] ?? null,
        ];
    }
}

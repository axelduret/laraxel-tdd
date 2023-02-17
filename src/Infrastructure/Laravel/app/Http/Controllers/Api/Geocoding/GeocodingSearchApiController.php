<?php

namespace App\Http\Controllers\Api\Geocoding;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeocodingSearchRequest;
use App\Services\GeoCoding\Query\GeocodingSearchQuery;

final class GeocodingSearchApiController extends Controller
{
    // TODO FormRequest.
    // TODO Reverse search.
    // TODO More parameters.

    public function __construct(private readonly GeocodingSearchQuery $query)
    {
    }

    public function __invoke(GeocodingSearchRequest $request): array|false
    {
        return $this->query->handle($request);
    }
}

<?php

namespace App\Http\Controllers\Api\Geocoding\Nominatim;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Domain\GeoCoding\Port\Input\GeoCodingSettings;

class FindOneNominatimApiController extends Controller
{
    public function __construct(public GeoCodingSettings $settings)
    {
    }

    public function __invoke(Request $request): array|false
    {
        // TODO FormRequest.
        // TODO Reverse search.
        // TODO More parameters.

        $url = $this->settings->url('https://nominatim.openstreetmap.org/search.php');

        $parameters = $this->settings->parameters([
            'format' => 'json',
            'street' => $request->input('street') ?: '',
            'postalcode' => $request->input('postalcode') ?: '',
            'city' => $request->input('city') ?: '',
            'country' => $request->input('country') ?: '',
        ]);

        $query = Http::get(
            url: $url,
            query: $parameters,
        );

        return  [
            'status' => $query->status(),
            'lat' =>  $query->json(0)['lat'] ?? null,
            'lon' =>  $query->json(0)['lon'] ?? null
        ];
    }
}

<?php

return [

    'url' => env('GEOCODING_URL', 'https://nominatim.openstreetmap.org/search.php'),

    'key' => env('GEOCODING_KEY'),

    'format' => env('GEOCODING_FORMAT', 'json'),
];

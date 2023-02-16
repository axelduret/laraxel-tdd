<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Domain\Controller\TestController as DomainController;
use App\Http\Controllers\Api\Geocoding\Nominatim\FindOneNominatimApiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('geocoding')->as('geocoding')->group(function () {

    /** geocoding/search */
    Route::get('search', FindOneNominatimApiController::class)->name('search');

    Route::prefix('types')->as('types')->group(function () {
        /** geocoding/types/search */
        Route::get('search', [DomainController::class, 'searchParameters'])->name('search');
    });
});

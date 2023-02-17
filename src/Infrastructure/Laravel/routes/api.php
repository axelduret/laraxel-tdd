<?php

declare(strict_types=1);

use App\Http\Controllers\Api\Geocoding\GeocodingSearchApiController;
use Domain\Controller\TestController as DomainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('geocoding')->as('geocoding')->group(function () {
    /** geocoding/search */
    Route::get('search', GeocodingSearchApiController::class)->name('search');

    Route::prefix('types')->as('types')->group(function () {
        /** geocoding/types/search */
        Route::get('search', [DomainController::class, 'searchParameters'])->name('search');
    });
});

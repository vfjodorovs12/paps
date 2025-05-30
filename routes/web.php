<?php

use Illuminate\Support\Facades\Route;
use Vfjodorovs12\Paps\Http\Controllers\AllianceStatsController;

Route::group([
    'middleware' => ['web', 'auth'],
    'prefix' => 'alliance-paps',
    'as' => 'alliance-paps.',
], function () {
    Route::get('/', [AllianceStatsController::class, 'index'])->name('index');
});

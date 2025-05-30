<?php

use Illuminate\Support\Facades\Route;
use Vfjodorovs12\Paps\Http\Controllers\AllianceStatsController;

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/paps', [AllianceStatsController::class, 'index'])->name('paps.stats');
    Route::get('/paps/forum', [AllianceStatsController::class, 'forum'])->name('paps.forum');
    Route::get('/paps/jabber', [AllianceStatsController::class, 'jabber'])->name('paps.jabber');
    Route::get('/paps/mumble', [AllianceStatsController::class, 'mumble'])->name('paps.mumble');
});

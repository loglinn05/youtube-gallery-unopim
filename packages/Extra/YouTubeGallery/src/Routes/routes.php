<?php

use Illuminate\Support\Facades\Route;
use Extra\YouTubeGallery\Http\Controllers\YoutubeVideoController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => config('app.admin_url')], function () {
    /**
     * YouTube gallery routes for admin.
     */
    Route::controller(YoutubeVideoController::class)->prefix('youtube-videos')->group(function () {
        Route::get('', 'index')->name('admin.youtube-gallery.index');
        Route::post('', 'store')->name('admin.youtube-gallery.store');
        Route::delete('{id}', 'destroy')->name('admin.youtube-gallery.destroy');
    });
});

<?php

namespace Extra\YouTubeGallery\Providers;

use Illuminate\Support\ServiceProvider;

class YoutubeGalleryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/Config/menu.php', 'menu.admin'
        );
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        $this->loadRoutesFrom(__DIR__.'/../Routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'youtube-gallery');
        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'youtube-gallery');
    }
}

<?php

namespace Extra\YouTubeGallery\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Extra\YouTubeGallery\Models\YoutubeVideo::class,
    ];
}

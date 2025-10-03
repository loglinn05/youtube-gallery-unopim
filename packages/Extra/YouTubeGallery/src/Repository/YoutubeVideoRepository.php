<?php

namespace Extra\YouTubeGallery\Repository;

use Webkul\Core\Eloquent\Repository;

class YoutubeVideoRepository extends Repository
{
    /**
     * Specify the Model class name
     *
     * @return string
     */
    function model(): string
    {
        return 'Extra\YouTubeGallery\Contracts\YoutubeVideo';
    }
}

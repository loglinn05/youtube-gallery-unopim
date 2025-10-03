<?php

namespace Extra\YouTubeGallery\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Webkul\User\Models\Admin;
use Extra\YouTubeGallery\Contracts\YoutubeVideo as YoutubeVideoContract;

class YoutubeVideo extends Model implements YoutubeVideoContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var $fillable
     */
    protected $fillable = [
        'name',
        'url',
    ];

    /**
     * Get the user that owns the example.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'address', 'description', 'logo', 'twitter_link',
        'facebook_link', 'website_video_link', 'linkedin_link'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['text_type', 'performance_type', 'text_voice', 'text_load', 'producing', 'music_type', 'invoice_image', 'read_status', 'status'];
}

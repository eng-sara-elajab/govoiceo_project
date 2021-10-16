<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    // use SoftDeletes;

    // protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'instructor', 'total_hours', 'introduction', 'image', 'video', 'course_link', 'price', 'deleted_at'];
}

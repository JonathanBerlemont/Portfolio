<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'github', 'image', 'time_taken', 'most_used_language'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'id', 'title', 'github', 'image', 'time_taken', 'most_used_language'
    ];
}

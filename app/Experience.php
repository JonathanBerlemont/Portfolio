<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'id', 'years', 'job', 'description', 'where'
    ];
}

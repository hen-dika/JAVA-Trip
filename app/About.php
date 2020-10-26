<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'meta_title', 'meta_keyword', 'meta_description'
    ];

    protected $hidden = [];
}

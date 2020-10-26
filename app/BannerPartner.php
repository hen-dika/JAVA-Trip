<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerPartner extends Model
{
    protected $fillable = [
        'name', 'link', 'status', 'image'
    ];

    protected $hidden = [];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Gallery;

class TravelPackages extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event', 'language', 'food', 'departure_date', 'duration', 'type', 'price'
    ];

    protected $hidden = [];

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}

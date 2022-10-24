<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location_id',
        'latitude',
        'longitude',
    ];

    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }
    
    public function pointImages()
    {
        return $this->hasMany('App\Models\PointImage');
    }
}

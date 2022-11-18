<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'point_id',
        'images',
    ];

    public function point()
    {
        return $this->belongsTo('App\Models\Point');
    }
}

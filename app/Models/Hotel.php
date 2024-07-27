<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "poster_url",
        "price",
        "address"
    ];

    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'facility_hotels', 'hotel_id', 'facility_id');
    }
}

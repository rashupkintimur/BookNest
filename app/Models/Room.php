<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "poster_url",
        "floor_area",
        "type",
        "price",
        "hotel_id"
    ];

    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'facility_rooms', 'room_id', 'facility_id');
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}

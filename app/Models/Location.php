<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_location')
            ->withPivot('type')
            ->withTimestamps();
    }

    public static function availabeLocation()
    {
        return Location::where('isAvailable', true)->get();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

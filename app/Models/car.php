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

    public static function getAvailableCars($filterDate)
    {
        return self::where('availableDate', '<=', $filterDate)->get();
    }

    public static function getAvailableCar($carModelId, $pickUpDate)
    {
        return (CarModel::find($carModelId)->cars()
            ->where('availableDate', '<', $pickUpDate)
            ->first()
        );
    }
}

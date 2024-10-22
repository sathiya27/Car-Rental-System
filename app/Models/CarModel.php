<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public static function availableCars($chosenDate)
    {
        return CarModel::whereHas('cars', function ($query) use ($chosenDate) {
            $query->where('availableDate', '<=', $chosenDate);
        })
            ->with(['cars' => function ($query) use ($chosenDate) {
                $query->where('availableDate', '<=', $chosenDate);
            }])
            ->withCount(['cars as available_cars_count' => function ($query) use ($chosenDate) {
                $query->where('availableDate', '<=', $chosenDate);
            }])
            ->get();
    }
}

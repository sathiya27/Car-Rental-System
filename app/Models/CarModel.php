<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

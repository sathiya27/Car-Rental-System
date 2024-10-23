<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'pickUpLocation' => 'required|exists:locations,id',
            'dropOffLocation' => 'required|exists:locations,id',
            'pickUpDate' => 'required|date',
            'dropOffDate' => 'required|date',
        ]);

        $date = Carbon::parse($request->input('pickUpDate'))->format('jS F Y');
        $carModels = CarModel::availableCars($request->input('pickUpDate'));
        return view('cars.index', ['carModels' => $carModels, 'date' => $date]);
    }
}

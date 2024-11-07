<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Car;
use App\Models\Booking;
use App\Models\Location;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pickUpDate = session()->get('pickUpDate');
        $dropOffDate = session()->get('dropOffDate');

        $days = $pickUpDate->diffInDays($dropOffDate) + 1;
        $totalPrice = number_format((float) session('carModel')->pricePerDay * $days, 2, '.', '');

        session([
            'totalPrice' => $totalPrice,
            'filteredPickUpDate' => $pickUpDate->format('l, M d, Y'),
            'filteredDropOffDate' => $dropOffDate->format('l, M d, Y')
        ]);

        /* dd(session()->all()); */
        return view('bookings.create', [
            'locations' => Location::availabeLocation(),
            'NumberOfDays' => $days,
            'pickUpLoca' => Location::find(session('pickUpLocation')),
            'dropOffLoca' => Location::find(session('dropOffLocation')),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fName' => 'required',
            'lName' => 'required',
            'pickUpLocationId' => 'required|exists:locations,id',
            'dropOffLocationId' => 'required|exists:locations,id',
            'pickUpDateTime' => 'required|date_format:Y-m-d\TH:i',
            'dropOffDateTime' => 'required|date_format:Y-m-d\TH:i',
            'carId' => 'required|exists:cars,id',
            'userId' => 'required|exists:users,id',
        ]);

        $car = Car::getAvailableCar($validatedData['carId'], $validatedData['pickUpDateTime']);

        $car->availableDate = Carbon::parse($validatedData['dropOffDateTime'])->setTimezone('UTC')->addDay();
        $car->save();

        $booking = Booking::create([
            'user_id' => $validatedData['userId'],
            'firstName' => $validatedData['fName'],
            'lastName' => $validatedData['lName'],
            'car_id' => $car->id,
            'pick_up_dateTime' => Carbon::parse($validatedData['pickUpDateTime'])->setTimezone('UTC'),
            'drop_off_dateTime' => Carbon::parse($validatedData['dropOffDateTime'])->setTimezone('UTC'),
        ]);

        $booking->locations()->attach($validatedData['pickUpLocationId'], ['type' => 'Pick Up']);
        $booking->locations()->attach($validatedData['dropOffLocationId'], ['type' => 'Drop Off']);

        return view('bookings.show')->with('success', 'Booking confirmed');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

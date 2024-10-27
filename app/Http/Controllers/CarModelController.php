<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\CarModel;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        session(['filteredCarModels' => $carModels]);
        return view('carModels.index', ['carModels' => $carModels, 'date' => $date]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        $carModels = session('filteredCarModels');
        $carModel = $carModels->firstWhere('id', $carModel->id);
        return view('carModels.show', ['carModel' => $carModel]);
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

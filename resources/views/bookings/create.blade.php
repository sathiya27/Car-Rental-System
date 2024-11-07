@extends('layouts.app')

@section('title', 'Booking')

@section('content')
<section class="section-p1" id="bookings-create-page">
    <div class="container">
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <fieldset>
            <legend>
                <span>Booking Details</span>
            </legend>
            <form action="{{route('bookings.store')}}" method="Post">
                <div class="row">
                    <div class="col-6 text-center" style="border-right: 2px solid #1212122e;">
                        @csrf
                        <label for="fName">First name</label>
                        <input type="text" name="fName" required>

                        <label for="lName">Last Name</label>
                        <input type="text" name="lName" required>

                        <label for="pickUpLocationId">Pick Up Location</label>
                        <select name="pickUpLocationId" id="" required>
                            @foreach($locations as $location)
                            <option value="{{$location->id}}" {{ $location->id == $pickUpLoca->id ? 'selected' : ''}}>
                                {{$location->locationName}}
                            </option>
                            @endforeach
                        </select>

                        <label for="dropOffLocationId">Drop Off Location</label>
                        <select name="dropOffLocationId" id="" required>
                            @foreach($locations as $location)
                            <option value="{{$location->id}}" {{ $location->id == $dropOffLoca->id ? 'selected' : ''}}>
                                {{$location->locationName}}
                            </option>
                            @endforeach
                        </select>

                        <div id="date-time-container" class="container">
                            <div class="row">
                                <div class="col">
                                    <label for="pickUpDateTime">Pick Up Date Time</label>
                                </div>
                                <div class="col">
                                    <label for=" dropOffDateTime">Drop Off Date</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <input type="datetime-local" name="pickUpDateTime"
                                        min="{{ session('pickUpDate')->startOfDay()->format('Y-m-d\TH:i') }}"
                                        max="{{ session('pickUpDate')->endOfDay()->format('Y-m-d\TH:i') }}"
                                        value="{{ session('pickUpDate') ? session('pickUpDate')->format('Y-m-d\TH:i') : '' }}" required>
                                </div>
                                <div class="col-6">
                                    <input type="datetime-local" name="dropOffDateTime"
                                        min="{{ session('dropOffDate')->startOfDay()->format('Y-m-d\TH:i') }}"
                                        max="{{ session('dropOffDate')->endOfDay()->format('Y-m-d\TH:i') }}"
                                        value="{{ session('dropOffDate') ? session('dropOffDate')->format('Y-m-d\TH:i') : '' }}" required>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-12">
                                    <a href="" class="normal btn btn-primary" style="margin-top: 25px;">Change Date</a>
                                </div>
                            </div>
                        </div>


                        <input type="hidden" name="carId" value="{{session('carModel')->id}}">
                        <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                    </div>
                    <div class="col-6 car-details">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <h1>Car Details</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 align-content-center">
                                <img src="{{asset('images/' . session('carModel')->carImage)}}" class="w-100" alt="">
                            </div>
                            <div class="col-7 bookings-create-carInfo-section">
                                <ul>
                                    <li>
                                        <label for="">Number of seats: </label>
                                        {{session('carModel')->numOfSeats}}
                                    </li>
                                    <li>
                                        <label for="">Number of doors: </label>
                                        {{session('carModel')->numOfDoors}}
                                    </li>
                                    <li>
                                        <label for="">Fuel: </label>
                                        {{session('carModel')->fuelType}}
                                    </li>
                                    <li>
                                        <label for="">Aircond: </label>
                                        {{session('carModel')->hasAc ? 'Yes' : 'No'}}
                                    </li>
                                    <li>
                                        <label for="">Price/day: </label>
                                        RM {{session('carModel')->pricePerDay}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 bookings-create-carInfo-section">
                                <div class="text-center">
                                    <h1>Car Insurance</h1>
                                </div>
                                <ul class="car-info-protection">
                                    <li><i class="fa-solid fa-check"></i> Free cancellation (48h)</li>
                                    <li><i class="fa-solid fa-check"></i> Fuel Policy: same-to-same</li>
                                    <li><i class="fa-solid fa-check"></i> Unlimited mileage included</li>
                                    <li><i class="fa-solid fa-check"></i> Collision damage waiver</li>
                                    <li><i class="fa-solid fa-check"></i> Third party coverage</li>
                                    <li><i class="fa-solid fa-check"></i> Theft protection waiver</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-75" id="bookings-create-subInfo" style="border-top: 2px solid #1212122e;">
                    <div class="col-12 text-center my-3">
                        <div class="row">
                            <div class="col-5">
                                <span>Pick Up</span>
                                <p>{{session('filteredPickUpDate')}}</p>
                                <p>{{$pickUpLoca->locationName}}</p>
                            </div>
                            <div class="col-2 text-center align-content-center">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                            <div class="col-5">
                                <span>Return</span>
                                <p>{{session('filteredDropOffDate')}}</p>
                                <p>{{$dropOffLoca->locationName}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3 class="font-weight-semibold">Subtotal</h3>
                                <p>RM {{session('carModel')->pricePerDay}} X {{$NumberOfDays}}(Total Days) =</p>
                                <h1 class="font-weight-bold">RM {{ session('totalPrice') }}</h1>
                            </div>
                        </div>
                        <button class="normal btn custom-success" type=" submit">Make Booking</button>
                    </div>
                </div>
            </form>
    </div>

    </fieldset>
    </div>
</section>

@endsection
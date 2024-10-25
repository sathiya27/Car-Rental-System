@extends('layouts.app')

@section('title', 'CarModel')

@section('content')
<section id="proDetails" class="section-p1">
    <div class="single-pro-image">
        <img src="{{asset('images/' . $carModel->carImage)}}" alt="" width="100%" id="mainImg">
    </div>

    <div class="single-pro-details">
        <div class="center-car-title">
            <h4 class="car-name"> {{$carModel->modelName}}</h4>
        </div>
        <h2>RM {{$carModel->pricePerDay}}/per day</h2>
        <button class="normal btn">Book</button>
        <h4>Car Details</h4>
        <div class="car-info">
            <div class="info-item">
                <i class="fa-solid fa-gas-pump"></i>
                <span>{{ $carModel->fuelType }}</span> <!-- Replace with actual value if needed -->
            </div>
            <div class="info-item">
                <i class="fa-solid fa-user-group"></i>
                <span>{{ $carModel->numOfSeats }}</span>
            </div>
            <div class="info-item">
                <i class="fa-solid fa-snowflake"></i>
                <span>{{ $carModel->hasAc ? 'Yes' : 'No' }}</span>
            </div>
            <div class="info-item">
                <i class="fa-solid fa-warehouse"></i>
                <span>{{ $carModel->available_cars_count }}</span>
            </div>
        </div>
    </div>
</section>

@endsection
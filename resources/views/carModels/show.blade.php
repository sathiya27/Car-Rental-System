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
        <div class="car-info-section">
            <div class="car-details-section">
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

                <ul class="car-info-protection">
                    <li><i class="fa-solid fa-check"></i> Free cancellation (48h)</li>
                    <li><i class="fa-solid fa-check"></i> Fuel Policy: same-to-same</li>
                    <li><i class="fa-solid fa-check"></i> Unlimited mileage included</li>
                    <li><i class="fa-solid fa-check"></i> Collision damage waiver</li>
                    <li><i class="fa-solid fa-check"></i> Third party coverage</li>
                    <li><i class="fa-solid fa-check"></i> Theft protection waiver</li>
                </ul>
            </div>
            <div class="car-book-section">
                <h2>RM {{$carModel->pricePerDay}}</h2>
                <span>/Per day</span>
                <a href="{{route('bookings.create')}}" class="normal btn book-button">Book</a>
            </div>
        </div>
    </div>
</section>

@endsection
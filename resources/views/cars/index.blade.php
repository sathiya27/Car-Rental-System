@extends('layouts.app')

@section('title', 'Cars')

@section('content')
<section id="cars-list" class="layout_padding2-top layout_padding-bottom">
    <div class="container">
        <div class="heading_container">
            <h2 class="mb-5">
                Cars Available On - {{$date}}
            </h2>
        </div>
        <div class="pro-container">
            @foreach($carModels as $carModel)
            <div class="pro" onclick="window.location.href='Sshop.html';">
                <div class="car-image">
                    <img src="{{asset('images/' . $carModel->carImage)}}" alt="">
                    <!-- <img src="https://placehold.co/230x200" alt=""> -->
                </div>
                <div class="des">
                    <h3>{{$carModel->modelName}}</h3>
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
                    <h4> RM {{$carModel->pricePerDay}}/Per Day</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            @endforeach

            <!-- Sample cars -->
            <div class="pro" onclick="window.location.href='Sshop.html';">
                <div class="car-image">
                    <img src="{{asset('images/c-2.png')}}" alt="">
                    <!-- <img src="https://placehold.co/230x200" alt=""> -->
                </div>
                <div class="des">
                    <h3>Car Name</h3>
                    <div class="car-info">
                        <div class="info-item">
                            <i class="fa-solid fa-gas-pump"></i>
                            <span>Petrol</span> <!-- Replace with actual value if needed -->
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-user-group"></i>
                            <span>12</span>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-snowflake"></i>
                            <span>Yes</span>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-warehouse"></i>
                            <span>100</span>
                        </div>
                    </div>
                    <h4> RM 1000/Per Day</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='Sshop.html';">
                <div class="car-image">
                    <img src="{{asset('images/c-1.png')}}" alt="">
                    <!-- <img src="https://placehold.co/230x200" alt=""> -->
                </div>
                <div class="des">
                    <h3>Car Name</h3>
                    <div class="car-info">
                        <div class="info-item">
                            <i class="fa-solid fa-gas-pump"></i>
                            <span>Petrol</span> <!-- Replace with actual value if needed -->
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-user-group"></i>
                            <span>12</span>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-snowflake"></i>
                            <span>Yes</span>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-warehouse"></i>
                            <span>100</span>
                        </div>
                    </div>
                    <h4> RM 1000/Per Day</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='Sshop.html';">
                <div class="car-image">
                    <img src="{{asset('images/c-3.png')}}" alt="">
                    <!-- <img src="https://placehold.co/230x200" alt=""> -->
                </div>
                <div class="des">
                    <h3>Car Name</h3>
                    <div class="car-info">
                        <div class="info-item">
                            <i class="fa-solid fa-gas-pump"></i>
                            <span>Petrol</span> <!-- Replace with actual value if needed -->
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-user-group"></i>
                            <span>12</span>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-snowflake"></i>
                            <span>Yes</span>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-warehouse"></i>
                            <span>100</span>
                        </div>
                    </div>
                    <h4> RM 1000/Per Day</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro" onclick="window.location.href='Sshop.html';">
                <div class="car-image">
                    <img src="{{asset('images/r-4.png')}}" alt="">
                    <!-- <img src="https://placehold.co/230x200" alt=""> -->
                </div>
                <div class="des">
                    <h3>Car Name</h3>
                    <div class="car-info">
                        <div class="info-item">
                            <i class="fa-solid fa-gas-pump"></i>
                            <span>Petrol</span> <!-- Replace with actual value if needed -->
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-user-group"></i>
                            <span>12</span>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-snowflake"></i>
                            <span>Yes</span>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-warehouse"></i>
                            <span>100</span>
                        </div>
                    </div>
                    <h4> RM 1000/Per Day</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <!-- Sample cars end -->
        </div>
    </div>
</section>
@endsection
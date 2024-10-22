@extends('layouts.app')

@section('title', 'Cars')

@section('content')
<section class="layout_padding2-top layout_padding-bottom">
    <div class="container">
        <div class="heading_container">
            <h2 class="mb-5">
                Check Out our available cars
            </h2>
        </div>
        <div class="car_container">
            @foreach($carModels as $carModel)
            <div class="box">
                <div class="img-box">
                    <img src="{{asset('images/c-1.png')}}" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        {{$carModel->modelName}}
                    </h5>
                    <p>
                        Number of available cars: {{$carModel->available_cars_count}}
                    </p>
                    <ul>
                        @foreach ($carModel->cars as $car)
                        <li>{{ $car->carColor }}</li>
                        @endforeach
                    </ul>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
            @endforeach
            <!-- <div class="box">
                <div class="img-box">
                    <img src="{{asset('images/c-2.png')}}" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Get Your Car
                    </h5>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when
                    </p>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="{{asset('images/c-3.png')}}" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Contact Your Dealer
                    </h5>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when
                    </p>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</section>
@endsection
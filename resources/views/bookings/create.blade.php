@extends('layouts.app')

@section('title', 'Booking')

@section('content')
<section class="section-p1">
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
        <form action="{{route('bookings.store')}}" method="Post">
            @csrf
            <label for="fName">First name</label>
            <input type="text" name="fName" required>

            <label for="lName">Last Name</label>
            <input type="text" name="lName" required>

            <label for="pickUpLocationId">Pick Up Location</label>
            <select name="pickUpLocationId" id="" required>
                @foreach($locations as $location)
                <option value="{{$location->id}}" {{ $location->id == session('pickUpLocation') ? 'selected' : ''}}>
                    {{$location->locationName}}
                </option>
                @endforeach
            </select>

            <label for="dropOffLocationId">Drop Off Location</label>
            <select name="dropOffLocationId" id="" required>
                @foreach($locations as $location)
                <option value="{{$location->id}}" {{ $location->id == session('dropOffLocation') ? 'selected' : ''}}>
                    {{$location->locationName}}
                </option>
                @endforeach
            </select>

            <label for="pickUpDateTime">Pick Up Date Time</label>
            <input type="datetime-local" name="pickUpDateTime"
                min="{{ session('pickUpDate')->startOfDay()->format('Y-m-d\TH:i') }}"
                max="{{ session('pickUpDate')->endOfDay()->format('Y-m-d\TH:i') }}"
                value="{{ session('pickUpDate') ? session('pickUpDate')->format('Y-m-d\TH:i') : '' }}" required>
            <!-- fix the time not storing in database properly issue -->

            <label for=" dropOffDateTime">Drop Off Date</label>
            <input type="datetime-local" name="dropOffDateTime"
                min="{{ session('dropOffDate')->startOfDay()->format('Y-m-d\TH:i') }}"
                max="{{ session('dropOffDate')->endOfDay()->format('Y-m-d\TH:i') }}"
                value="{{ session('dropOffDate') ? session('dropOffDate')->format('Y-m-d\TH:i') : '' }}" required>

            <input type="hidden" name="carId" value="{{session('carModel')->id}}">
            <input type="hidden" name="userId" value="{{Auth::user()->id}}">

            <button type=" submit">Make Booking</button>
        </form>
    </div>
</section>

@endsection
<!-- resources/views/cars/booking.blade.php -->

@extends('fornt.main') <!-- Assuming you have a layout file -->

@section('content')
    <form>
        <div class="row g-3">
            <!-- Car Type Selection -->
            <div class="col-12">
                <select class="form-select" name="car_type" aria-label="Select Your Car Type">
                    <option selected>Select Your Car Type</option>
                    @foreach($cars as $car)
                        <option value="{{ $car->id }}">{{ $car->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Pick-Up Location Selection -->
            <div class="col-12">
                <div class="input-group">
                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                        <span class="fas fa-map-marker-alt"></span> <span class="ms-1">Pick Up</span>
                    </div>
                    <select class="form-select" name="pick_up_location">
                        <option selected>Select Pick Up Location</option>
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Drop-Off Location Selection -->
            <div class="col-12">
                <div class="input-group">
                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                        <span class="fas fa-map-marker-alt"></span><span class="ms-1">Drop off</span>
                    </div>
                    <select class="form-select" name="drop_off_location">
                        <option selected>Select Drop Off Location</option>
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Pick-Up Date and Time Selection -->
            <div class="col-12">
                <div class="input-group">
                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                        <span class="fas fa-calendar-alt"></span><span class="ms-1">Pick Up</span>
                    </div>
                    <input class="form-control" type="date" name="pick_up_date">
                    <select class="form-select ms-3" name="pick_up_time">
                        @foreach (range(0, 23) as $hour)
                            <option value="{{ $hour }}:00">{{ date("g:i A", strtotime("$hour:00")) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Drop-Off Date and Time Selection -->
            <div class="col-12">
                <div class="input-group">
                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                        <span class="fas fa-calendar-alt"></span><span class="ms-1">Drop off</span>
                    </div>
                    <input class="form-control" type="date" name="drop_off_date">
                    <select class="form-select ms-3" name="drop_off_time">
                        @foreach (range(0, 23) as $hour)
                            <option value="{{ $hour }}:00">{{ date("g:i A", strtotime("$hour:00")) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-12">
                <button class="btn btn-light w-100 py-2">Book Now</button>
            </div>
        </div>
    </form>
@endsection

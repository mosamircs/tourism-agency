@include('includes.above')
<title>Create Room</title>
@include('includes.head')
@include('includes.sidebar')
@include('includes.navbar')
<div class="content-wrapper">
<!-- reserve room form -->
<form method="POST" action="{{ route('hotelstore') }}">
    @csrf
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Reserve Hotel Room</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
            @csrf
            <div class="card-body">
                <div class="form-group">
                    {{-- contacts table [] --}}
                    <label for="hotel_location">Hotel Location</label>
                    <input type="string" class="form-control" name="hotel_location" placeholder="Enter Location">
                    <div class="alert-danger">{{$errors->first('hotel_location')}}</div>
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="number" class="form-control" name="duration" placeholder="Enter Duration">
                    <div class="alert-danger">{{$errors->first('duration')}}</div>
                </div>
                <div class="form-group">
                    <label for="reservation_number">Number of Rooms</label>
                    <input type="number" class="form-control" name="reservation_number" placeholder="Enter Number of Rooms">
                    <div class="alert-danger">{{$errors->first('reservation_number')}}</div>
                </div>
                <div class="form-group">
                    <label for="room_type">Room Type</label>
                    <input type="string" class="form-control" name="room_type" placeholder="Enter Room Type">
                    <div class="alert-danger">{{$errors->first('room_type')}}</div>
                </div>
                <div class="form-group">
                    <label for="start_time">Start Time</label>
                    <input type="datetime-local" class="form-control" name="start_time" placeholder="Enter Start Time">
                    <div class="alert-danger">{{$errors->first('start_time')}}</div>
                </div>
                <div class="form-group">
                    <label for="to_time">End Time</label>
                    <input type="datetime-local" class="form-control" name="to_time" placeholder="Enter End Time">
                    <div class="alert-danger">{{$errors->first('to_time')}}</div>
                </div>
                <div class="form-group">
                    <label for="availability">Availabilty</label>
                    <input type="number" class="form-control" name="availability" placeholder="Enter Availability status">
                    <div class="alert-danger">{{$errors->first('availability')}}</div>
                </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" placeholder="Price">
                <div class="alert-danger">{{$errors->first('price')}}</div>
            </div>
        </div>

            <button type="submit" class="btn btn-primary">Reserve Room</button>

            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
        </form>
    <!-- ./wrapper -->
    @include('includes.footer');


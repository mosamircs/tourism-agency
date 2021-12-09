@include('includes.above')
<title>Hotels</title>
@include('includes.head')
@include('includes.sidebar')
@include('includes.navbar')
<div class="container-fluid">
    <div class="row">
        <section class="content">
            <div class="content-wrapper" style="min-height: 1345.31px;">
                <div class="container-fluid">
                  <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hotels Reservations</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{ route('addsupplier') }}">
                        <button type="submit" class="btn btn-primary">Hotels</button>
                    </form>
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2"
                                    class="table table-bordered table-hover dataTable dtr-inline collapsed"
                                    aria-describedby="example2_info">
                                    <thead>
                                        <tr>
                                            <th>Service Type</th>
                                            <th>Customer Name</th>
                                            <th>Rooms Number</th>
                                            <th>Room Type</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Duration</th>
                                            <th>Hotel location</th>
                                            <th>price </th>
                                            <th>phone </th>
                                            <th>personal ID </th>
                                            <th>total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{ dd($rooms); }}
                                        @foreach ($rooms as $room)
                                            <tr class="odd">
                                                
                                                <td>{{ $room->service_type }}</td>
                                                <td>{{ $room->contact->contact_name}}</td>
                                                <td>{{ $room->items->reservation_number }}</td>
                                                <td>{{ $room->room_type }}</td>
                                                <td>{{ $room->price }}</td>
                                                <td>{{ $room->price }}</td>
                                                <td>{{ $room->duration }}</td>
                                                <td>{{ $room->hotel_location }}</td>
                                                <td>{{ $room->price }}</td>
                                                <td>{{ $room->personal_id }}</td>
                                                <td>{{ $room->price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

@include('includes.footer')


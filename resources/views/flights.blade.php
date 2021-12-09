@include('includes.above')
@include('includes.head')
@include('includes.sidebar')
@include('includes.navbar')

        <section class="content">
            <!-- ./wrapper -->
        <div class="content-wrapper">

  <!-- /.card-header -->
  <div class="card-body table-responsive p-0" style="height: 300px;">
    <div class="d-flex py-2">
      <form method="GET" action="{{route('addsupplier')}}">
        <button type="submit" class="btn btn-primary mx-2">add new Supplier</button>
      </form>
        <form method="GET" action="{{route('addflight')}}">
      <button type="submit" class="btn btn-primary mx-2">add new Flight</button>
    </form>
    </div>
    <table class="table table-head-fixed text-nowrap">
        <form method="GET" action="{{route('addsupplier')}}">
            <button type="submit" class="btn btn-primary">add new Supplier</button>
          </form>

        <thead>
        <tr>
          <th>ID</th>
          <th>Supplier</th>
          <th>From-Location</th>
          <th>To-Location</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($flights as $flight)
        <tr>
          <td>{{$flight->id}}</td>
          <td>{{$flight->contact->contact_name}}</td>
          <td>{{$flight->from_location}}</td>
          <td>{{$flight->to_location}} </td>
          <td>{{$flight->price}}</td>
        </tr>
    @endforeach
      </tbody>
    </table>
  </div>
  <form method="GET" action="{{route('addflight')}}">
          <button type="submit" class="btn btn-primary">add new Flight</button>
        </form>
  @include('includes.footer');

@include('includes.above')
<title>Tourism | Dashboard</title>
@include('includes.head')
@include('includes.sidebar')
@include('includes.navbar')
  <section class="content">
    <div class="content-wrapper" style="min-height: 1345.31px;">
        <div class="container-fluid">
          <div class="row">
  <!-- form start -->
  <form method="post" action="{{route('storecustomer')}}" >
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="contact_name" class="form-control"  placeholder="Enter name">
        <div class="alert-danger">{{$errors->first('contact_name')}}</div>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="number" name="phone" class="form-control"  placeholder="Enter phone">
          <div class="alert-danger">{{$errors->first('phone')}}</div>
        </div>
      <div class="form-group">
        <label>Email address</label>
        <input type="email" name="email" class="form-control"  placeholder="Enter email">
        <div class="alert-danger">{{$errors->first('email')}}</div>
      </div>
        <div class="form-group">
          <label>personal-id</label>
          <input type="number" name="personal_id" class="form-control"  placeholder="Enter id">
          <div class="alert-danger">{{$errors->first('personal_id')}}</div>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          @if(session()->has('message'))
          <div class="alert alert-success">
              {{ session()->get('message') }}
          </div>
          @endif
      </form>
</div>
@include('includes.footer')

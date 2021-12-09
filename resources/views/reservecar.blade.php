@include('includes.above')
<title>Create Room</title>
@include('includes.head')
@include('includes.sidebar')
@include('includes.navbar')
<!-- reserve room form -->
<form method="POST" action="{{ route('reserveroom') }}">
    @csrf
    <!-- general form elements -->
        <!-- /.card-header -->
        <!-- form start -->
        <section class="content">
            <div class="content-wrapper" style="min-height: 1345.31px;">
                <div class="container-fluid">
                  <div class="row">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Reserve Car</h3>
            </div>
        <form action="{{ route('reserveroom') }}" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Reserve Car</button>
        </form>
    </div>
    <!-- ./wrapper -->
    @include('includes.footer');

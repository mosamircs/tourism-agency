  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TOURISM</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('flights')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flight</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('cars') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Car</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('hotels') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hotel</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Create Reservation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('reserveflight')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Ticket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('reservecar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reserve Car</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('reserveroom') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reserve Room</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('customer')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addsupplier')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Supplier</p>
                </a>
              </li>
            </ul>
          </li>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

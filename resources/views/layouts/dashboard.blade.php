<!doctype html>
<html lang="en">

<head>
  <title>Dashboard | Blog Laravel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="{{ asset('css/dashboard/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />

  @yield('css')

</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-normal">
          Blog Laravel
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ route('admin.index') }}">
              <i class="material-icons">dashboard</i>
              <p>Articulos</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">{{ Auth::user()->name }}</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">notifications</i>
                    <span class="notification">{{ count(Auth::user()->unreadNotifications) }}</span>
                    <p class="d-lg-none d-md-block">
                      Some Actions
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    @foreach(Auth::user()->unreadNotifications as $notification)
                    <a class="dropdown-item" target="_blank" href="{{ $notification['data']['link'] }}">{{ $notification['data']['mesaje'] }}: {{ $notification['data']['titulo'] }}</a>
                    @endforeach
                  </div>
                </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          @yield('content')
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="{{ route('admin.index') }}">
                  Blog Laravel
                </a>
              </li>
            </ul>
          </nav>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>


   <!--   Core JS Files   -->
   <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
   <script src="{{ asset('js/dashboard/core/popper.min.js') }}"></script>
   <script src="{{ asset('js/dashboard/core/bootstrap-material-design.min.js') }}"></script>
   <script src="https://unpkg.com/default-passive-events"></script>
   <script src="{{ asset('js/dashboard/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
   <script src="{{ asset('js/dashboard/plugins/bootstrap-notify.js') }}"></script>
  <script src="{{ asset('js/dashboard/material-dashboard.js?v=2.1.0') }}"></script>

  @yield('scripts')
 
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>CRUD | @yield('siteTitle')</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('public/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('public/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <script src="{{ asset('public/assets/js/config.navbar-vertical.js') }}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{ asset('public/assets/lib/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet">
 
    @stack('styles')
    <link href="{{ asset('public/assets/css/theme.css') }}" rel="stylesheet">

  </head>
  <body>
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <nav class="navbar navbar-vertical navbar-expand-xl navbar-light">
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="index.html">
              <div class="d-flex align-items-center py-3"><img class="mr-2" src="{{ asset('public/assets/img/illustrations/falcon.png') }}" alt="" width="40" /><span class="text-sans-serif">falcon</span>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content perfect-scrollbar scrollbar">
              <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}" >
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span>Dashboard
                    </div>
                  </a>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="home">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Category</span>
                    </div>
                  </a>
                  <ul class="nav collapse show" id="home" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('category.create')}}">Add New</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('category.index')}}">List</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand">

            <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
              <div class="d-flex align-items-center"><img class="mr-2" src="{{ asset('public/assets/img/illustrations/falcon.png') }}" alt="" width="40" /><span class="text-sans-serif">falcon</span>
              </div>
            </a>
            
            <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
              
              <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{ asset('public/assets/img/team/3-thumb.png') }}" alt="" />

                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white rounded-soft py-2">
                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/settings.html">Settings</a>
                    <a class="dropdown-item" href="authentication/basic/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          


@yield('content')



          
          <footer>
            <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with IDB <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; </p>
              </div>
              
            </div>
          </footer>
        </div>

      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/@fortawesome/all.min.js') }}"></script>
    <script src="{{ asset('public/assets/lib/stickyfilljs/stickyfill.min.js') }}"></script>
    
@stack('scripts')
    <script src="{{ asset('public/assets/js/theme.js') }}"></script>

  </body>

</html>
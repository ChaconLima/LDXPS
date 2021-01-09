
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LDXPS</title>

    <link rel="stylesheet" href="{{url(mix('LDXPS/css/styleCss.css'))}}"> 
    <link rel="stylesheet" href="{{url(mix('LDXPS/css/styleSass.css'))}}">

  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Sistema LDXPS</a>
    </header>
    
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <span data-feather="home"></span>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Vendedores
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Clientes
                </a>
              </li>
            </ul>
          </div>
        </nav>
    

        @yield('contend')


      </div>
    </div>

    <script src="{{url(mix('LDXPS/js/feather.js'))}}"></script>
    <script src="{{url(mix('LDXPS/js/jquery.js'))}}"></script>
    <script src="{{url(mix('LDXPS/js/bootstrap.js'))}}"></script>
    <script src="{{url(mix('LDXPS/js/scripts.js'))}}"></script>
  </body>
</html>

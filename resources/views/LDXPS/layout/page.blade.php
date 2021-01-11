
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <link rel="stylesheet" href="{{url(mix('LDXPS/css/pageCss.css'))}}"> 
    <link rel="stylesheet" href="{{url(mix('LDXPS/css/pageSass.css'))}}">

  </head>
  <body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow text-center">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{route('home')}}">
        Sistema LDXPS
      </a>
    </header>
  
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item nav-item">

                    <a class="nav-link dropdown-toggle {{(Route::current()->getname()==='vendors.index' ? 'active':'')}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span data-feather="shopping-bag"></span>
                      Vendedores(as)
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{route('vendors.index')}}">
                        <span data-feather="database"></span>
                        Todos Vendedores
                      </a></li>
                      
                      <li><a class="dropdown-item" href="{{route('vendors.create')}}"> 
                        <span data-feather="user-plus"></span>
                        Adicionar Vendedor(a)
                      </a></li>

                    </ul>
        
                </li>
                <li class="nav-item nav-item">

                    <a class="nav-link dropdown-toggle {{(Route::current()->getname()==='customers.index' ? 'active':'')}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span data-feather="users"></span>
                      Clientes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{route('customers.index')}}">
                        <span data-feather="database"></span>
                        Todos Clientes
                      </a></li>
                    </ul>
        
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
    <script src="{{url(mix('LDXPS/js/page.js'))}}"></script>
  </body>
</html>

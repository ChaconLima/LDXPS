
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro</title>
    <link rel="stylesheet" href="{{url(mix('LDXPS/css/formCss.css'))}}"> 
    <link rel="stylesheet" href="{{url(mix('LDXPS/css/pageSass.css'))}}">
  </head>
  <body>
    <header class="navbar navbar-dark  bg-dark flex-md-nowrap p-0 shadow text-center">
      <a class="bnt navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{route('home')}}">
        <span data-feather="arrow-left-circle"></span>
        Home
      </a>
    </header>
    
    @yield('contend-register')
    
    <script src="{{url(mix('LDXPS/js/jquery.js'))}}"></script>
    <script src="{{url(mix('LDXPS/js/bootstrap.js'))}}"></script>
    <script src="{{url(mix('LDXPS/js/feather.js'))}}"></script>
    <script src="{{url(mix('LDXPS/js/form.js'))}}"></script>
  </body>
</html>

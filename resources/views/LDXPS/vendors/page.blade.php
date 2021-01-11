@extends('LDXPS.layout.page')

@section('contend')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="container">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div> <h1 class="h2">Lista de Vendedores(as)</h1> </div>
      <div>
        @if ($message = Session::get('success'))
          <div id="alert" class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
        @endif
      </div>
      
     
    </div>
    @include('LDXPS.vendors.table')
    
  </div>
</main>
  
@endsection
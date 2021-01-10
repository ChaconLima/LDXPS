@extends('LDXPS.layout.page')

@section('contend')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Clientes do Vendedor(a): <b>{{$vendor->DSNOME}}</b></h1>
    </div>
    <a href="#"  type="button" class="btn btn-warning btn-sm">      
      <span data-feather="edit"></span>
       Editar Vendedor (a)
    </a>
    <a type="button" class="btn btn-dark btn-sm">
      <span data-feather="user-plus"></span>
       Adicionar Cliente para esse Vendedor(a)
    </a>

    
    @include('LDXPS.customers.table')
  </div>
</main>
  
@endsection
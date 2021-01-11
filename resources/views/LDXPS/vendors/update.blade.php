@extends('LDXPS.layout.form')

@section('contend-register')
<div class="container">
    <main>
      <div class="py-5 text-center">
      <h2> Alterar Informações do Vendedor(a): <b>{{$vendor->DSNOME}}</b> </h2>
      <div class="row g-3">
        <div class="col-md-7 col-lg-12">
            <hr class="featurette-divider">
          <form action="{{route('vendors.update',$vendor->CDVEND)}}", method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Nome</label>
                <input 
                    name="DSNOME"
                    type="text" 
                    class="form-control" 
                    id="DSNOME" 
                    placeholder="José Joaquin" 
                    value="{{$vendor->DSNOME}}" 
                    required
                    >
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="firstName" class="form-label">Código da Tablea de Preço </label>
                <input 
                    name="CDTAB"
                    type="text" 
                    class="form-control" 
                    id="CDTAB" 
                    pattern="[0-9]+$" 
                    placeholder=" xxxx " 
                    value="{{$vendor->CDTAB}}" 
                    required  
                >
        
              </div>

              <div class="col-sm-6">
                <label for="firstName" class="form-label">Data de Nascimento</label>
                <input 
                    name="DTNASC"
                    type="date" 
                    class="form-control" 
                    id="DTNASC" 
                    value="{{$vendor->DTNASC}}" 
                    required 
                    min="1970-01-01" 
                    max="2020-12-31">
              </div>

              <div class="col-sm-6">
                <button class="btn btn-primary" type="submit">
                  <span data-feather="upload-cloud"></span>
                  Confirmar
                </button>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span data-feather="user-x"></span>
                    Excluir
                </button>
              </div>
  
              </div>
            </div>
          </form>
          <a  class="btn btn-success btn-lg" href="{{route('customers.create')}}">
            <span data-feather="user-plus"></span>
             Criar Cliente
          </a>
        </div>
      </div>
    </main>
    
    Clientes do Vendedor(a):
    @include('LDXPS.customers.table')
  </div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3> Excluir o Vendedor(a): <p><b>{{$vendor->DSNOME}} ?</b></p></h3>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
            <form action="{{route('vendors.destroy', $vendor->CDVEND)}}", method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <span data-feather="user-x"></span>
                    Sim, excluir</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  @endsection
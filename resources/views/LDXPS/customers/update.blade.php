@extends('LDXPS.layout.form')

@section('contend-register')
<div class="container">
    <main>
      <div class="py-5 text-center">
        <h2> Alterar Informações do Cliente: <b>{{$customer->DSNOME}}</b> </h2>
        <div class="row g-3">
      <div class="row g-3">
        <div class="col-md-7 col-lg-12">
            <hr class="featurette-divider">
          <form action="{{route('customers.update',$customer->CDCL)}}", method="POST">
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
                    value="{{$customer->DSNOME}}" 
                    required
                    >
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-5">
                <label for="country" class="form-label">Tipo de Pessoa</label>
                <select class="form-select" id="country" name="IDTIPO" required>
                  
                  @if ($customer->IDTIPO =="PJ")
                    <option value="PJ"> {{$customer->IDTIPO}} - Pessoa Jurídica </option>
                    <option value="PF">PF - Pessoa Física</option>
                   
                  @else
                    <option value="PF"> {{$customer->IDTIPO}} - Pessoa Física</option>
                    <option value="PJ"> PJ - Pessoa Jurídica</option>
                    
                  @endif
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>

              <div class="col-md-6">
                <label for="country" class="form-label">Vendedor</label>

                <select class="form-select" id="country" name="CDVEND" required">
                
                  @if($register!=null)
                    <option value="{{$register['id_vendor']}}">{{$register['name_vendor']}}</option>
                    @foreach ($vendors as $vendor)
                      @if($vendor->CDVEND != $register['id_vendor'])
                        <option value="{{$vendor->CDVEND}}">{{$vendor->DSNOME}}</option>
                      @endif
                    @endforeach
                  @else 
                    @foreach ($vendors as $vendor)
                      <option value="{{$vendor->CDVEND}}">{{$vendor->DSNOME}}</option>
                    @endforeach  
                  @endif

                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>

              <div class="col-sm-5">
                <label for="firstName" class="form-label">Limite de Crédito </label>
                <input 
                    name="DSLIM"
                    type="text" 
                    class="form-control" 
                    id="DSLIM" 
                    pattern="[0-9]+(\.[0-9]{1,2})?%?"
                    placeholder=" R$ xxxx,xx " 
                    value="{{$customer->DSLIM}}" 
                    required  
                >
              </div>
  
              </div>
            </div>
            <div>
              <button class="btn btn-primary" type="submit">
                <span data-feather="upload-cloud"></span>
                Atualizar as Informações
              </button>

              <a href="{{route('vendors.create')}}" class="btn btn-success" >
                <span data-feather="user-plus"></span>
                Criar um Novo Vendedor
              </a>
                  <!-- Button to Open the Modal -->
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span data-feather="user-x"></span>
                Excluir Cliente(a)
              </button>
            </div>

            </form>
        </div>
      </div>
    </main>
    <hr class="featurette-divider">
    
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3> Excluir o Cliente(a): <p><b>{{$customer->DSNOME}} ?</b></p></h3>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
            <form action="{{route('customers.destroy', $customer->CDCL)}}", method="POST">
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
@extends('LDXPS.layout.form')

@section('contend-register')
<div class="container">
    <main>
      <div class="py-5 text-center">
      <h2> Cadastrar um novo Cliente </h2>
      <div class="row g-3">
        <div class="col-md-7 col-lg-12">
            <hr class="featurette-divider">
          <form action="{{route('customers.store')}}", method="POST">
            @csrf
            @method('POST')
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Nome</label>
                <input 
                    name="DSNOME"
                    type="text" 
                    class="form-control" 
                    id="DSNOME" 
                    placeholder="José Joaquin" 
                    value="" 
                    required
                    >
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-5">
                <label for="country" class="form-label">Tipo de Pessoa</label>
                <select class="form-select" id="country" name="IDTIPO" required>
                  <option value="PF">PF - Pessoa Física</option>
                  <option value="PJ">PJ - Pessoa Jurídica</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>

              <div class="col-md-6">
                <label for="country" class="form-label">Vendedor</label>

                <select class="form-select" id="country" name="CDVEND" required>
                  @foreach ($vendors as $vendor)
                    <option value="{{$vendor->CDVEND}}">{{$vendor->DSNOME}}</option>
                  @endforeach
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
                    value="" 
                    required  
                >
              </div>
  
              </div>
            </div>
  
            <button class="btn btn-primary btn-lg" type="submit"><span data-feather="upload-cloud"></span>Cadastrar as Informações</button>
          </form>
        </div>
      </div>
    </main>
    <hr class="featurette-divider">
    
  </div>
  @endsection
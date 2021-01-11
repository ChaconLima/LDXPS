@extends('LDXPS.layout.form')

@section('contend-register')
<div class="container">
    <main>
      <div class="py-5 text-center">
      <h2> Cadastrar um novo Vendedor(a) </h2>
      <div class="row g-3">
        <div class="col-md-7 col-lg-12">
            <hr class="featurette-divider">
          <form action="{{route('vendors.store')}}", method="POST">
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

              <div class="col-sm-6">
                <label for="firstName" class="form-label">Código da Tablea de Preço </label>
                <input 
                    name="CDTAB"
                    type="text" 
                    class="form-control" 
                    id="CDTAB" 
                    pattern="[0-9]+$" 
                    placeholder=" xxxx " 
                    value="" 
                    required  
                >
        
              </div>

              <div class="col-sm-6">
                <label for="firstName" class="form-label">Data de Aniversário</label>
                <input 
                    name="DTNASC"
                    type="date" 
                    class="form-control" 
                    id="DTNASC" 
                    value="2020-01-30" 
                    required 
                    min="1970-01-01" 
                    max="2020-12-31">
              </div>
  
              {{-- <div class="col-md-5">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" required>
                  <option value="">PF - Pessoa Física</option>
                  <option>PJ - Pessoa Jurídica</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div> --}}
  
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
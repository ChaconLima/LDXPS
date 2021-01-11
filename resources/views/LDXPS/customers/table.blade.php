
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          @if ((Route::current()->getname() != 'vendors.edit'))
            <th>Tipo de Cliente</th>
            <th>Limete de Crédito (R$)</th>
            <th>
              Opções
            </th>
          @endif
        
      </thead>
      <tbody>
        @foreach ($customers as $customer)
        <tr>
          <td class="col-2">{{++$i}}</td>
          <td class="col-4">{{$customer->DSNOME}}</td>
          @if ((Route::current()->getname() !='vendors.edit'))
            <td>{{$customer->IDTIPO}}</td>
            <td>{{$customer->DSLIM}}</td>
          
            <td>
              <a href="{{route('customers.edit',$customer->CDCL)}}"" type="button" class="btn btn-warning btn-sm">
                <span data-feather="edit"></span> Editar Cliente
              </a>
            </td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
    <nav aria-label="...">
      <ul class="pagination">

        @if ($customers->onFirstPage())
          <li class="page-item col-2">
            <a class="btn btn-dark btn-sm disabled"> <span data-feather="chevrons-left"></span>
              Anterior</a>
          </li>
        @else
          <li class="page-item col-2">
            <a class="btn btn-dark btn-sm" href="{{ $customers->previousPageUrl() }}"> <span data-feather="chevrons-left"></span>
              Anterior</a>
          </li>
        @endif
        <li class="page-item col-2">
          Paginação
        </li>
        @if ($customers->hasMorePages())
          <li class="page-item">
            <a class="btn btn-dark btn-sm" href="{{ $customers->nextPageUrl() }}">Próxima
              <span data-feather="chevrons-right"></span></a>
          </li>
        @else
          <li class="page-item">
            <a class="btn btn-dark btn-sm disabled">Próxima
              <span data-feather="chevrons-right"></span></a>
          </li>
        @endif
      </ul>
    </nav> 
  </div>


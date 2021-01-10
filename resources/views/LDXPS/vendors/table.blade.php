 
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Opções</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($vendors as $vendor)
          <tr>
            <td class="col-2"> {{++$i}} </td>
            <td class="col-8" >{{$vendor['DSNOME']}}</td>
            <td class="col-12">
              <form action="{{route('vendors.show',$vendor['CDVEND']) }}" method="GET">
                
                <button type="submit" title="delete" type="button" class="btn btn-dark btn-sm">
                  <span data-feather="check"></span>
                  Selecionar
                </button>
              </form>

            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  
      <nav aria-label="...">
        <ul class="pagination">

          @if ($vendors->onFirstPage())
            <li class="page-item col-2">
              <a class="btn btn-dark btn-sm disabled">
                <span data-feather="chevrons-left"></span>
                Anterior
              </a>
            </li>
          @else
            <li class="page-item col-2">
              <a class="btn btn-dark btn-sm" href="{{ $vendors->previousPageUrl() }}">
                <span data-feather="chevrons-left"></span>
                Anterior
              </a>
            </li>
          @endif
          <li class="page-item col-2">
            Paginação
          </li>
          @if ($vendors->hasMorePages())
            <li class="page-item">
              <a class="btn btn-dark btn-sm" href="{{ $vendors->nextPageUrl() }}">
                Próxima
                <span data-feather="chevrons-right"></span>
              </a>
            </li>
          @else
            <li class="page-item">
              <a class="btn btn-dark btn-sm disabled">
                Próxima
                <span data-feather="chevrons-right"></span>
              </a>
            </li>
          @endif
        </ul>
      </nav>
  
  </div>

 
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Selecionar</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($vendors as $vendor)
          <tr>
            <td class="col-2"> {{++$i}} </td>
            <td class="col-8" >{{$vendor['DSNOME']}}</td>
            <td class="col-12">
              <button type="button" class="btn btn-dark btn-sm"> 
                Clientes 
              </button>
            </td>
            <td>
              <a type="button" class="btn btn-warning btn-sm" href="">
                <span data-feather="edit"></span>
              </a>
            </td>
            <td>
             
              <form action="{{route('vendors.destroy',$vendor['CDVEND']) }}" method="POST">
                
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" type="button" class="btn btn-danger btn-sm">
                  <span data-feather="trash-2"></span>
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
              <a class="btn btn-info btn-sm disabled">Anterior</a>
            </li>
          @else
            <li class="page-item col-2">
              <a class="btn btn-info btn-sm" href="{{ $vendors->previousPageUrl() }}">Anterior</a>
            </li>
          @endif
          <li class="page-item col-2">
            Paginação
          </li>
          @if ($vendors->hasMorePages())
            <li class="page-item">
              <a class="btn btn-info btn-sm" href="{{ $vendors->nextPageUrl() }}">Próxima</a>
            </li>
          @else
            <li class="page-item">
              <a class="btn btn-info btn-sm disabled">Próxima</a>
            </li>
          @endif
        </ul>
      </nav>
  
  </div>

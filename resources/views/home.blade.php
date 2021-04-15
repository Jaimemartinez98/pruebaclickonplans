
@extends('plantilla')
@section('content')
   

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header col-md-12" >
                    
                   
                    
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Filtro De los Libros</h2>
         
        <input class="form-control" id="myInput" type="text" placeholder="Buscar Por Caracteres..">      
        <table class="table table-bordered table-striped">
                <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Cantidad de Paginas</th>   
                            <th scope="col">Acciones</th>   
                                 
                        </tr>
                    </thead>
                    <tbody id="myTable">
                            @foreach ($programacion as $item)
                            <tr>
                            <td>{{$item['ID']}}</td>
                            <td>{{$item['title']}}</td>
                            <td>{{$item['content_short']}}</td>
                            <td>{{$item['author']}}</td>
                            <td>{{$item['pages']}}</td>
                            <td>
                                <a href="{{route('editar1', $item['ID'])}}" class="btn btn-warning">Ver</a>
                                <a href="{{route('addlibro')}}" class="btn btn-info">Agregar</a>
                            </td>
                                    
                          
                            
                            </tr>
                @endforeach
            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>


@endsection

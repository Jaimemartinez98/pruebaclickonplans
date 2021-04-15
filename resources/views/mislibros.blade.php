@extends('plantilla')
@section('content')
   

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table col-md-12   ">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Cantidad de Paginas</th>   
                            <th scope="col">Accion</th>  
                             
                                 
                        </tr>
                            @foreach ($libros as $item)
                            <tr>
                                @if ($item->user_id == auth()->id())
                                
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>{{$item->autor}}</td>
                                <td>{{$item->paginas}}</td>
                                <td>
                                    <form action="" method="POST">
                                        @method('DELETE')
                                        @csrf
                                    <a href="{{route('borrar', $item->id)}}" class="btn btn-warning">Borrar</a>
                                </form>
                                </td>
                                @endif

                            </tr>
                @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

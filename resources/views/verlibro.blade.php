@extends('plantilla')
@section('content')

<div class="row">

    <form action="" method="POST">
        @method('PUT')
        @csrf
        <form>
            @foreach ($programacion as $item)
            
        <div class="row">
                <label name="idc" id="idc" for="exampleInputEmail1"></label>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Titulo</label>
                    <input type="text" name="nombre1" id="nombre1" value="{{$item['title']}}"
                        class="form-control" placeholder="Ingrese su nombre" required>
                </div>
                
           
                <label name="idc" id="idc" for="exampleInputEmail1"></label>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Autor</label>
                    <input type="text" name="nombre1" id="nombre1" value="{{$item['author']}}"
                        class="form-control" placeholder="Ingrese su nombre" required>
                </div>
                
          
                <label name="idc" id="idc" for="exampleInputEmail1"></label>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <input type="text" name="nombre1" id="nombre1" value="{{$item['content_short']}}"
                        class="form-control" placeholder="Ingrese su nombre" required>
                </div>
                
            
                <label name="idc" id="idc" for="exampleInputEmail1"></label>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Año</label>
                    <input type="text" name="nombre1" id="nombre1" value="{{$item['publisher_date']}}"
                        class="form-control" placeholder="Ingrese su nombre" required>
                </div>
                
           
                <label name="idc" id="idc" for="exampleInputEmail1"></label>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Idioma</label>
                    <input type="text" name="nombre1" id="nombre1" value="{{$item['language']}}"
                        class="form-control" placeholder="Ingrese su nombre" required>
                </div>
                
          
                
                
            </div>
            @endforeach
            
        </form>
    </form>

 





@if (session('update1'))
<div class="alert alert-succes mt-3">
    {{session('update1')}}
</div>
@endif
</div>
@endsection

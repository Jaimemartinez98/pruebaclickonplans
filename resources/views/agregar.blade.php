@extends('plantilla')

@section('content')
<div class="row" class="center-block">
  
<form action="{{route('store')}}" method="POST">
    @csrf  
<form>
  
    
       
    </div> 
    <br>
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">Ingreso de Libros</h4>
  <div class="row">
      <div class="col-md-12 m-auto">

            <!-- aqui crea las cajas de texto-->  
          <div class="form-group">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
          </div>
          <!--fin caja texto-->
              <!-- aqui crea las cajas de texto-->  
              <div class="form-group">
                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Descripcion" required>
              </div>
              <div class="form-group">
                <input type="text" name="autor" id="autor" class="form-control" placeholder="Autor" required>
              </div>
              <div class="form-group">
                <input type="number" name="paginas" id="paginas" class="form-control" placeholder="Cantidad de paginas" required>
              </div>
              <!--fin caja texto-->
              <button type="submit" class="btn btn-success btn-block">Enviar</button>
      </div>

  </div>
  </div>
  </div>
  </form>

  
 

  
</form> 
@if (session('agregar2'))
    <div class="alert alert-succes mt-3">
        {{session('agregar2')}}
    </div>
@endif
</div>
@endsection
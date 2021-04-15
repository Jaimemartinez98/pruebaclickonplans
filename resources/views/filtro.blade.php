@extends('plantilla')

@section('content')
<div class="row" class="center-block">
  

<form>
    <form action="verfiltro" method="POST">
    
       
    </div> 
    <br>
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">Filtro</h4>
  <div class="row">
      <div class="col-md-12 m-auto">

            <!-- aqui crea las cajas de texto-->  
          <div class="form-group">
            <input type="number" name="anio" id="anio" class="form-control" placeholder="Año" required>

          </div>
          <!--fin caja texto-->
              <!-- aqui crea las cajas de texto-->  
              <div class="form-group">
                <input type="text" name="autor" id="autor" class="form-control" placeholder="Autor" required>
              </div>
              <div class="form-group">
                <input type="text" name="lenguaje" id="lenguaje" class="form-control" placeholder="lenguaje" required>
              </div>
              
              <!--fin caja texto-->
              <a href="{{route('verfiltro')}}" class="btn btn-info">Agregar</a>
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

<script type="text/javascript">
    // guardar datos
    localStorage.setItem("anio", $anio);

</script>
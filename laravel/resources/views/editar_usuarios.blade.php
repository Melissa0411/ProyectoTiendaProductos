@extends('layout.plantilla')

@section('titulo', 'Actualizar')

@section('contenido')

<div class="card">
    <h5 class="card-header"><center>Editar Usuario</h5>
    <div class="card-body">
<p class="card-text">
        <form action="{{route('salvar_usuarios',  $usuarios->id_usuario)}}" method="POST" enctype = "multipart/form-data">
            @csrf
            @method("PUT")

            <label for="">Matricula</label> <br>
             <input type="text" name="clave" class="form-control" required value="{{$usuarios->clave}}" >
             

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="{{$usuarios->nombre}}">
    
<label for="">Apellido Paterno</label>
            <input type="text" name="app" class="form-control" required value="{{$usuarios->app}}">

            <label for="">Apellido Materno</label>
            <input type="text" name="ap" class="form-control" required value="{{$usuarios->ap}}">

            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fn" class="form-control" required value="{{$usuarios->fn}}">

            <br>

<div class="form-check">
  <input class="form-check-input" type="radio" name="gen" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Masculino
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gen" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Femenino
  </label>
</div>


<br>
<label for="">Foto</label>
            <input type="file" name="foto" class="form-control" required value="{{$usuarios->foto}}">

            <label for="">Gmail</label>
            <input type="text" name="email" class="form-control" required value="{{$usuarios->email}}">

            <label for="">Contraseña</label>
            <input type="password" name="pass" class="form-control" required value="{{$usuarios->pass}}">
            
            
            <label for="">Nivel</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            @foreach($nivel as $user)
                  <option value="{{ $user['id_nivel'] }}">
                  {{ $user ['detalle'] }}
                  @endforeach
</select>

           
<br>
                <label class="form-check-label" for="gridCheck">
        Activo  </label>
                <input type="checkbox" name="activo" {{ $usuarios -> activo >0?'cheked':''; }}>

</div>
     
     

                <a href="{{route('lista_usuarios')}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-primary">Actualizar</button>


        </form>


      </p>
    </div>
  </div>




@endsection
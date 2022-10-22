
@extends('layout.plantilla')

@section('titulo', 'Crear Nuevo registro')

@section('contenido')

<div class="card">
    <h5 class="card-header">Agregar Usuario</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="{{ route('alta_usuarios')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Matricula</label>
            <input type="text" name="clave" class="form-control" value="{{ old('clave') }}" required>

            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}"  required>

            <label for="">Apellido Paterno</label>
            <input type="text" name="app" class="form-control"  value="{{ old('app') }}" required>

            <label for="">Apellido Materno</label>
            <input type="text" name="apm" class="form-control" value="{{ old('ap') }}" required>

            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fn" class="form-control"  value="{{ old('fn') }}"  required>
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
            <input type="file" name="foto" class="form-control" required >



            <label for="">Gmail</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}" required>

            <label for="">Password</label>
            <input type="password" name="pass" class="form-control" value="{{ old('pass') }}" required>

            <label for="">Nivel</label>
            <input type="text" name="nivel" class="form-control" required>

            <label for="">Activo</label>
            <input type="text" name="activo" class="form-control" required>


            <label for="">Nivel</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            @foreach($tipos as $tipo)
                  <option value="{{ $tipo['detalle'] }}">
                  {{ $tipo ['detalle'] }}
                  @endforeach
</select>

           
<br>
                <label class="form-check-label" for="gridCheck">
        Activo  </label>
                <input type="checkbox" name="activo" >

</div>
     


<a href="{{route('lista_usuarios')}}" class="btn btn-info">Regresar</a>
            <button class="btn btn-primary">Actualizar</button>


        </form>


      </p>
    </div>
  </div>


  @endsection

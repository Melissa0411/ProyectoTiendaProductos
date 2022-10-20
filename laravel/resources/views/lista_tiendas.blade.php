@extends('navbar.header')
@section('content')

<table class="table table-striped table-hover">  <thead>

    <tr>
      <th scope="col" style="color: #591C68">Id_tienda</th>
      <th scope="col" style="color: #591C68">Clave</th>
      <th scope="col" style="color: #591C68">Nombre</th>
      <th scope="col" style="color: #591C68">Foto(nombre)</th>
      <th scope="col" style="color: #591C68">Foto</th>


    </tr>
  </thead>

@foreach($tiendas1 as $tienda)
<tr>
    <td>{{ $tienda -> id_tienda }}</td>
    <td>{{ $tienda -> clave }}</td>
    <td>{{ $tienda -> nombre }}</td>
    <td>{{ $tienda -> foto }}</td>
    <td><img src="{{ asset ('archivos/'.$tienda->foto) }}" style="width:50px"></td>
  
   
</tr>
@endforeach
@endsection


    </table>
    
</body>
</html>
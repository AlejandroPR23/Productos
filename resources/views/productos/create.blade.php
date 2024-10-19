@extends('partials.layout')

@section('title','Crear Producto')

@section('content')
<div class="container mt-3 p-3">
    <form action="{{route('productos.store')}}" class="p-3 bg-info-subtle rounded" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <h2 class="text-center">Crear Un Producto</h2>
        </div>
        <hr>
        <label for="Nombre"  class="form-label" >Nombre:</label>
        <br>
        <input type="text" name="nombre" class="form-control form-control-sm" required>
        <br>
        <label for="Descripcion"  class="form-label" >Descripcion:</label>
        <br>
        <input type="text" name="descripcion" class="form-control form-control-sm" required>
        <br>
        <label for="Imagen"  class="form-label">Selecciona una imagen</label>
        <br>
        <input name="imagen" type="file" class="form-control form-control-sm" required>
        <br>
        <button type="submit" class="btn btn-success">Guardar Producto</button>
        <a class="btn btn-danger" href="{{route('productos.index')}}">Cancelar</a>
    </form>
</div>
@endsection
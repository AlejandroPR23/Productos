@extends('partials.layout')

@section('title','Editar Producto')

@section('content')
<div class="container mt-3 p-3">
    <form action="{{route('productos.update',$producto)}}" class="p-3 bg-info-subtle rounded" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <h2 class="text-center">Editar Un Producto</h2>
        </div>
        <hr>
        <label for="Nombre" class="form-label">Nombre:</label>
        <br>
        <input type="text" name="nombre" class="form-control form-control-sm" required value="{{$producto->nombre}}">
        <br>
        <label for="Descripcion" class="form-label">Descripcion:</label>
        <br>
        <input type="text" name="descripcion" class="form-control form-control-sm" required value="{{$producto->descripcion}}">
        <br>
        <div class="my-2">
            <label for="Imagen_Actual" class="form-label">Imagen Actual:</label>
            <img src="{{ asset('imagen/' . $producto->imagen) }}" width="250px" height="150px">
        </div>
        <label for="Imagen" class="form-label">Selecciona una nueva imagen:</label>
        <br>
        <input name="imagen" class="form-control form-control-sm" type="file">
        <br>
        <button type="submit"  class="btn btn-success">Guardar Producto</button>
        <a class="btn btn-danger" href="{{route('productos.index')}}">Cancelar</a>
    </form>
</div>
@endsection
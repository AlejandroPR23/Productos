@extends('partials.layout')

@section('tittle','Contact')

@section('content')

<h1>@lang('contact')</h1>

<!-- @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif -->



<form method="" action="">
    @csrf
    <input type="text" name="name" placeholder="Ingrese su nombre" value="{{old('name')}}">
    {!! $errors->first("name",":message <br>")!!}
    <br>
    <input type="email" name="email" placeholder="Ingrese su email" value="{{old('email')}}">
    {!! $errors->first("email",":message <br>")!!}
    <br>
    <input type="text" name="subject" placeholder="Ingrese un asunto" value="{{old('subject')}}">
    {!! $errors->first("subject",":message <br>")!!}
    <br>
    <textarea name="content" placeholder="ingrese su mensaje">{{old('content')}}</textarea>
    {!! $errors->first("content",":message <br>")!!}
    <br>
    <button>Enviar</button>
</form>
@endsection
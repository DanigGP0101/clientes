@extends('layout.app')

@section('title')
    Nuevo registro de usuario
@endsection

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/registros" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" value="{{old('nombre')}}" class="form-control @error('nombre') is-invalid @enderror" name="nombre">
                @error('nombre')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Apellido</label>
                <input type="text" value="{{old('apellido')}}" class="form-control @error('apellido') is-invalid @enderror" name="apellido">
                @error('apellido')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Cedula</label>
                <input type="text" value="{{old('cedula')}}" class="form-control @error('cedula') is-invalid @enderror" name="cedula">
                @error('cedula')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Telefono</label>
                <input type="text" value="{{old('telefono')}}" class="form-control @error('telefono') is-invalid @enderror" name="telefono">
                @error('telefono')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" value="{{old('direccion')}}" class="form-control @error('direccion') is-invalid @enderror" name="direccion">
                @error('direccion')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" name="password">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div><br>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection
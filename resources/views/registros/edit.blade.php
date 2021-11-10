@extends('layout.app')

@section('title')
    Actualizar registro de usuario
@endsection

@section('content')
<form action="/registros/update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$registros->id}}">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{$registros->nombre}}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="{{$registros->apellido}}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Cedula</label>
                <input type="text" class="form-control" name="cedula" value="{{$registros->cedula}}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="{{$registros->telefono}}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" class="form-control" name="direccion" value="{{$registros->direccion}}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" value="{{$registros->email}}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" value="{{$registros->password}}">
            </div>
        </div>
    </div><br>
    <button type="submit" class="btn btn-warning">Actualizar</button>
</form>
@endsection
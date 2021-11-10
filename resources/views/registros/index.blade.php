@extends('layout.app')

@section('title')
    Clientes
    <a href="/registros/create" class="btn btn-success">Nuevo</a>
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <!--th>Id</th-->
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Email</th>
                <!--th>Contraseña</th-->
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $value)
                <tr>
                    <!--td>{{$value->id}}</td-->
                    <td>{{$value->nombre}}</td>
                    <td>{{$value->apellido}}</td>
                    <td>{{$value->cedula}}</td>
                    <td>{{$value->telefono}}</td>
                    <td>{{$value->direccion}}</td>
                    <td>{{$value->email}}</td>
                    <!--td>{{$value->password}}</td-->
                    <td>{{$value->state == 1 ? 'Inactive' : 'Active'}}</td>
                    <td>
                        @if($value->state == 1)
                                <a href="/registros/state/{{$value->id}}" class="btn btn-info"><i class="fas fa-lock"></i>Active</a>
                        @else
                                <a href="/registros/state/{{$value->id}}" class="btn btn-info"><i class="fas fa-lock"></i>Inactive</a>
                        @endif
                        <a href="/registros/{{$value->id}}" class="btn btn-warning"><i class="fas fa-user-edit"></i></a>
                        <!--button class="btn btn-danger"><i class="far fa-trash-alt"></i></button-->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
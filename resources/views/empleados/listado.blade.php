@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Empleados</h2>
    @foreach($array as $apirest)
    <div class="col-md-6">
        <ul class="list-group">
            <li class="list-group-item">{{ $apirest['name'] }}</li>
            <li class="list-group-item">{{ $apirest['username'] }}</li>
        </ul>
    </div>
    @endforeach
    <a href="{{url('/empleado/create') }}"  class="btn btn-success">Agregar</a>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Foto</th>
            <th scope="col">Acciones T</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <th scope="row">{{$empleado->id}}</th>
                <td colspan="1">{{$empleado->nombre}}</td>
                <td colspan="1">{{$empleado->apellidos}}</td>
                <td colspan="1">{{$empleado->correo}}</td>
                <td ><img style="width:100px;" src="{{ asset('storage').'/'.$empleado->foto }}" alt=""></td>
                <td>
                    <a class="btn btn-warning" href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                        Editar
                    </a>
                    <form action="{{url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                        <!-- <button type="button" class="btn btn-primary">Primary</button></td> -->
                        <input type="submit" class="btn btn-danger" onclick="return confirm('¿Desea Eliminar?')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
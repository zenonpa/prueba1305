@extends('producto.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Listado de Productos</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('producto.create') }}">Agregar</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre Producto</th>
            <th>Cantidad</th>
            <th width="280px">Acción</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($productos as $producto)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>
                    <form action="{{ route('producto.destroy',$producto->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('producto.show',$producto->id) }}">Mostrar</a>
                        <a class="btn btn-primary" href="{{ route('producto.edit',$producto->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
@extends('producto.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Visualización del Producto: {{ $data['producto']->nombre }}</h2>                
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('producto') }}"> Atras</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Nombre de Producto:</th>
            <td>{{ $data['producto']->nombre }}</td>
        </tr>
        <tr>
            <th>Talla</th>
                @switch ($data['producto']->talla)
                 @case ("S")
                    <td> Small </td>
                    @break
                 @case ('M')
                    <td> Medium </td>
                    @break
                 @case ('L')
                    <td> Large </td>
                    @break
                @endswitch
        </tr>
        <tr>
            <th>Observaciones</th>
            <td>{{ $data['producto']->observaciones }}</td>
        </tr>
        <tr>
            <th>Marca</th>
            <td>{{ $data['marca']->nombre }}</td>
        </tr>
        <tr>
            <th>Cantidad en Inventario</th>
            <td>{{ $data['producto']->cantidad }}</td>
        </tr>
        <tr>
            <th>Fecha de embarque</th>
            <td>{{ $data['producto']->fecembarque }}</td>
        </tr>
    </table>
@endsection
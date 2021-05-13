@extends('marca.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Visualización de la marca: {{ $marca->nombre }}</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('marca') }}"> Atras</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Nombre de Marca:</th>
            <td>{{ $marca->nombre }}</td>
        </tr>
        <tr>
            <th>Referencia</th>
            <td>{{ $marca->referencia }}</td>
        </tr>

    </table>
@endsection
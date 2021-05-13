@extends('marca.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Listado de Marcas</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('marca.create') }}">Agregar</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    @if ($message = Session::get('failed'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre Marca</th>
            <th>Referencia</th>
            <th width="280px">Acción</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($marcas as $marca)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $marca->nombre }}</td>
                <td>{{ $marca->referencia }}</td>
                <td>
                    <form action="{{ route('marca.destroy',$marca->id) }}" method="POST">
                        <a href="{{ route('marca.show',$marca->id) }}">
                            <img class="animar1" src="{{ asset('images/search.png')}}"></a>

                        <a href="{{ route('marca.edit',$marca->id) }}">
                            <img class="animar1" src="{{ asset('images/edit.png')}}">
                        </a>
                        @csrf
                        @method('DELETE')
                        <button class="blanco" type="submit"> <img src="{{ asset('images/trash.png')}}"></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
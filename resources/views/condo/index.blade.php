@extends('layouts.dashboard')
@extends('layouts.app')

@section('content')

@endsection

@section('dashboard')
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h5 style="padding-top: 1.5px;" class="pull-left">Condominos</h5>
            <a class="btn btn-default pull-right" href="{{ route('condo.create') }}">Añadir condomino</a>
        </div>
        <div class="panel-body">
            @if($data)
                <table class="table">
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Dirección</td>
                            <td>Opciones</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)   
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->direction }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('condo.show', $row->id) }}">Info</a>
                                <a class="btn btn-primary" href="{{ route('condo.edit', $row->id) }}">Editar</a>
                                <form method="POST" action="{{ route('condo.destroy', $row->id) }}" style="display: inline;">
                                    {{ method_field('DELETE')}}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>

@endsection
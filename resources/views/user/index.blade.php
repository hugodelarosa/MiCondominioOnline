@extends('layouts.dashboard')
@extends('layouts.app')

@section('content')

@endsection

@section('dashboard')
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h5 style="padding-top: 1.5px;" class="pull-left">Usuarios</h5>
            <a class="btn btn-default pull-right" href="{{ route('user.create') }}">Añadir usuario</a>
        </div>
        <div class="panel-body">
            @if($data)
                <table class="table">
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>E-mail</td>
                            <td>Telefono</td>
                            <td>Opciones</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)   
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->lastname }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('user.show', $row->id) }}">Info</a>
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
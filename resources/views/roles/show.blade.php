@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h5 style="padding-top: 1.5px;" class="pull-left">Rol {{ $role->name }}</h5>
        <a class="btn btn-default pull-right" href="{{ route('roles.index') }}">Atras</a>
    </div>
    <div class="panel-body">
        <div class="list-group">
            <div class="list-group-item">ID: {{ $role->id }}</div>
            <div class="list-group-item">Membresia: {{ $role->permission_id }}</div>
            <div class="list-group-item">Rol: {{ $role->name}} </div>
            <div class="list-group-item">Fecha De Creación: {{ $role->created_at }}</div>
        </div>
    </div>
</div>
@endsection
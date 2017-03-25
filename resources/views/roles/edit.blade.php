@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h5 style="padding-top: 1.5px;" class="pull-left">Editar rol {{ $role->name }}</h5>
        <a class="btn btn-default pull-right" href="{{ route('roles.index') }}">Atras</a>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('roles.update', $role->id) }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            
            <div class="form-group">
                <strong>Rol:</strong>
                <input class="form-control" type="text" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</div>
@endsection
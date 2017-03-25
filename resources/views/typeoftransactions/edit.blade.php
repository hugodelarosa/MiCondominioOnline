@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h5 style="padding-top: 1.5px;" class="pull-left">Editar usuario {{ $typeoftransaction->name }}</h5>
        <a class="btn btn-default pull-right" href="{{ route('typeoftransactions.index') }}">Atras</a>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('typeoftransactions.update', $typeoftransaction->id) }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            
            <div class="form-group">
                <strong>Nombre:</strong>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <strong>Ingreso o Gasto:</strong>
                <input class="form-control" type="checkbox" name="lastname" value="1">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</div>
@endsection
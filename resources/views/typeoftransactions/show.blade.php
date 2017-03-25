@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h5 style="padding-top: 1.5px;" class="pull-left">Tipo de transacción {{ $typeoftransaction->name }}</h5>
        <a class="btn btn-default pull-right" href="{{ route('typeoftransactions.index') }}">Atras</a>
    </div>
    <div class="panel-body">
        <div class="list-group">
            <div class="list-group-item">ID: {{ $typeoftransaction->id }}</div>
            <div class="list-group-item">Nombre: {{ $typeoftransaction->name }}</div>
            <div class="list-group-item">Ingreso o Gasto: {{ $typeoftransaction->income_outcome }}</div>
            <div class="list-group-item">Fecha De Creación: {{ $typeoftransaction->created_at }}</div>
        </div>
    </div>
</div>
@endsection
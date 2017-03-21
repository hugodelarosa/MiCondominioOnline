@extends('layouts.app')

@section('content')
@include('layouts._sidenav')
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h5 style="padding-top: 1.5px;" class="pull-left">Condominio {{ $estate->name }}</h5>
            <a class="btn btn-default pull-right" href="{{ route('estates.index') }}">Atras</a>
        </div>
        <div class="panel-body">
            <div class="list-group">
                <div class="list-group-item">ID: {{ $estate->id }}</div>
                <div class="list-group-item">Tipo De Condominio: {{ $estate->type_of_estate_id }}</div>
                <div class="list-group-item">Numero: {{ $estate->number}} </div>
                <div class="list-group-item">Rentado: {{ $estate->rented }}</div>
                <div class="list-group-item">Lugares De Estacionamiento: {{ $estate->number_of_parking_lots }}</div>
                <div class="list-group-item">Notas: {{ $estate->notes }}</div>
                <div class="list-group-item">Fecha De Creación: {{ $estate->created_at }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
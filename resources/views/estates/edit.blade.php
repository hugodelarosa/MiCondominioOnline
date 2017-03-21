@extends('layouts.app')

@section('content')
@include('layouts._sidenav')
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h5 style="padding-top: 1.5px;" class="pull-left">Editar condominio {{ $estate->name }}</h5>
            <a href="" class="btn btn-default pull-right" href="{{ route('estates.index') }}">Atras</a>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('estates.update', $estate->id) }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                
                <div class="form-group">
                    <strong>Numero:</strong>
                    <input class="form-control" type="text" name="number">
                </div>
                <div class="form-group">
                    <strong>Rentado:</strong>
                    <input class="form-control" type="text" name="rented">
                </div>
                <div class="form-group">
                    <strong>Lugares de estacionamiento:</strong>
                    <input class="form-control" type="text" name="number_of_parking_lots">
                </div>
                <div class="form-group">
                    <strong>Nota:</strong>
                    <input class="form-control" type="text" name="notes">
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
</div>
@endsection
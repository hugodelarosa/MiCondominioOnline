@extends('layouts.dashboard')
@extends('layouts.app')

@section('content')

@endsection

@section('dashboard')
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h5 style="padding-top: 1.5px;" class="pull-left">Editar condomino {{ $condo->name }}</h5>
            <a href="" class="btn btn-default pull-right" href="{{ route('condos.index') }}">Atras</a>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('condos.update', $condo->id) }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                
                <div class="form-group">
                    <strong>Condomino:</strong>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <strong>Dirección:</strong>
                    <input class="form-control" type="text" name="direction">
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
</div>
@endsection
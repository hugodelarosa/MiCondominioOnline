@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h5 style="padding-top: 1.5px;" class="pull-left">Añadir Condomino</h5>
        <a class="btn btn-default pull-right" href="{{ route('condos.index') }}">Atras</a>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('condos.store') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Condomino</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('direction') ? ' has-error' : '' }}">
                <label for="direction" class="col-md-4 control-label">Dirección</label>

                <div class="col-md-6">
                    <input id="direction" type="text" class="form-control" name="direction" value="{{ old('direction') }}" required autofocus>

                    @if ($errors->has('direction'))
                        <span class="help-block">
                            <strong>{{ $errors->first('direction') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Añadir condomino
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>                
@endsection
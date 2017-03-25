@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h5 style="padding-top: 1.5px;" class="pull-left">Añadir tipo de transacción</h5>
        <a class="btn btn-default pull-right" href="{{ route('typeoftransactions.index') }}">Atras</a>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('typeoftransactions.store') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nombre</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('income_outcome') ? ' has-error' : '' }}">
                <label for="income_outcome" class="col-md-4 control-label">Ingreso o Gasto</label>

                <div class="col-md-6">
                    <input id="income_outcome" type="checkbox" class="form-control" name="income_outcome" value="1" autofocus>

                    @if ($errors->has('income_outcome'))
                        <span class="help-block">
                            <strong>{{ $errors->first('income_outcome') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Añadir usuario
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>                 
@endsection
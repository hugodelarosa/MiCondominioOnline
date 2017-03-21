@extends('layouts.app')

@section('content')
@include('layouts._sidenav')  
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h5 style="padding-top: 1.5px;" class="pull-left">Añadir condominio</h5>
            <a class="btn btn-default pull-right" href="{{ route('estates.index') }}">Atras</a>
        </div>
        <div class="panel-body">
           <form class="form-horizontal" role="form" method="POST" action="{{ route('estates.store') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                    <label for="number" class="col-md-4 control-label">Numero</label>

                    <div class="col-md-6">
                        <input id="number" type="text" class="form-control" name="number" value="{{ old('number') }}" required autofocus>

                        @if ($errors->has('number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('rented') ? ' has-error' : '' }}">
                    <label for="rented" class="col-md-4 control-label">Rentado</label>

                    <div class="col-md-6">
                        <input id="rented" type="text" class="form-control" name="rented" value="{{ old('rented') }}" required autofocus>

                        @if ($errors->has('rented'))
                            <span class="help-block">
                                <strong>{{ $errors->first('rented') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('number_of_parking_lots') ? ' has-error' : '' }}">
                    <label for="number_of_parking_lots" class="col-md-4 control-label">Lugares de Estacionamiento</label>

                    <div class="col-md-6">
                        <input id="number_of_parking_lots" type="text" class="form-control" name="number_of_parking_lots" value="{{ old('number_of_parking_lots') }}" required>

                        @if ($errors->has('number_of_parking_lots'))
                            <span class="help-block">
                                <strong>{{ $errors->first('number_of_parking_lots') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
                    <label for="notes" class="col-md-4 control-label">Notas</label>

                    <div class="col-md-6">
                        <input id="notes" type="notes" class="form-control" name="notes" value="{{ old('notes') }}" required>

                        @if ($errors->has('notes'))
                            <span class="help-block">
                                <strong>{{ $errors->first('notes') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Añadir condominio
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>                 
@endsection
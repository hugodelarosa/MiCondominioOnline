@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h5 style="padding-top: 1.5px;" class="pull-left">Añadir visitante</h5>
        <a class="btn btn-default pull-right" href="{{ route('visitors.index') }}">Atras</a>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('visitors.store') }}">
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

            <div class="form-group{{ $errors->has('arrival') ? ' has-error' : '' }}">
                <label for="arrival" class="col-md-4 control-label">Dia de llegada</label>

                <div class="col-md-6">
                    <input id="arrival" name="arrival" value="{{ old('arrival') }}"  >

                    @if ($errors->has('arrival'))
                        <span class="help-block">
                            <strong>{{ $errors->first('arrival') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('vehicle') ? ' has-error' : '' }}">
                <label for="vehicle" class="col-md-4 control-label">Vehiculo ?</label>

                <div class="col-md-6">
                    <input id="vehicle" type="checkbox" class="form-control" name="vehicle">

                    @if ($errors->has('vehicle'))
                        <span class="help-block">
                            <strong>{{ $errors->first('vehicle') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('type_of_visitor') ? ' has-error' : '' }}">
                <label for="type_of_visitor" class="col-md-4 control-label">Tipo de Visitante</label>

                <div class="col-md-6">
                    <select name="type_of_visitor">
                        @foreach($tov as $t)
                            <option value="{{$t->id}}"> {{$t->name}} </option>
                        @endforeach
                    </select>

                    @if ($errors->has('estate'))
                        <span class="help-block">
                            <strong>{{ $errors->first('type_of_visitor') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('estate') ? ' has-error' : '' }}">
                <label for="estate" class="col-md-4 control-label">Condomino visitado</label>

                <div class="col-md-6">
                    <select name="estate">
                        @foreach($estates as $c)
                            <option value="{{$c->id}}"> {{$c->condos[0]->name}} - {{$c->typeOfEstate->name}} -{{$c->number}} </option>
                        @endforeach
                    </select>

                    @if ($errors->has('estate'))
                        <span class="help-block">
                            <strong>{{ $errors->first('estate') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Añadir visitante
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>     





@endsection




@section('scripts')

 
   <script src="/js/jquery/jquery.min.js"></script>
  <script src="/js/jquery/jquery-ui.js"></script>

    <link href="/js/jquery/jquery-ui.css" rel="Stylesheet" type="text/css" />
  <script>
  $( function() {
    $( "#arrival" ).datepicker({ 
        minDate:0,
        dateFormat: "yy-mm-dd"
    });
  } );
  </script>

  

@endsection

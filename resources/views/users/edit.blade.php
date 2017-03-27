@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h5 style="padding-top: 1.5px;" class="pull-left">Editar usuario {{ $user->name }}</h5>
        <a href="" class="btn btn-default pull-right" href="{{ route('users.index') }}">Atras</a>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('users.update', $user->id) }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            
            <div class="form-group">
                <strong>Nombre:</strong>
                <input class="form-control" value="{{$user->name}}" type="text" name="name">
            </div>
            <div class="form-group">
                <strong>Apellido:</strong>
                <input class="form-control" value="{{$user->lastname}}" type="text" name="lastname">
            </div>  
            <div class="form-group">
                <strong>Correo Electrónico:</strong>
                <input class="form-control" value="{{$user->email}}" type="text" name="email">
            </div>
            <div class="form-group">
                <strong>Rol</strong>
                <select class="form-control">
                    @foreach($roles as $rol)
                        @if($user->role->id == $rol->id)
                            <option selected value="{{$rol->id}}">{{$rol->name}}</option>
                        @else
                           <option value="{{$rol->id}}">{{$rol->name}}</option> 
                        @endif

                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>Teléfono:</strong>
                <input class="form-control" value="{{$user->phone}}"  type="text" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</div>
@endsection
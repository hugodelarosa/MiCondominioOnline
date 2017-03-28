@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h5 style="padding-top: 1.5px;" class="pull-left">Visitas</h5>
        <a class="btn btn-default pull-right" href="{{ route('visitors.create') }}">Añadir Visita</a>
    </div>
    <div class="panel-body">
        @if($data)
            <table class="table">
                <thead>
                    <tr>
                        <td>Dia de llegada</td>
                        <td>Condomino que visita</td>
                        <td>Nombre de Visita</td>
                        <td>Tipo de Visita</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $row)   
                    <tr>
                        <td>{{ $row->date_arrival }}</td>
                        
                        @foreach($condo as $c)
                            @if($row->user_id == $c->id)
                                <td> {{$c->name}} </td>
                            @endif
                        @endforeach

                        <td> {{$row->name}}</td>

                        @foreach($tipo as $t)
                            @if($row->type_of_visitor_id == $t->id)
                                <td> {{$t->name}} </td>
                            @endif
                        @endforeach
                        <td>
                            <a class="btn btn-info" href="{{ route('visitors.show', $row->id) }}">Info</a>
                            <a class="btn btn-primary" href="{{ route('visitors.edit', $row->id) }}">Editar</a>
                            <form method="POST" action="{{ route('visitors.destroy', $row->id) }}" style="display: inline;">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        @endif
    </div>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@endsection

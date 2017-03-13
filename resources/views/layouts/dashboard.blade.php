@extends('layouts.app')

@section('panel')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Panel De Control</div>

                <div class="panel-body">
                    Bienvenido!
                    <ul class="list-group">
                        <li class="list-group-item">Usuarios</li>
                        <li class="list-group-item"></li>
                        <li class="list-group-item"></li>
                        <li class="list-group-item"></li>
                        <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</div>

@endsection
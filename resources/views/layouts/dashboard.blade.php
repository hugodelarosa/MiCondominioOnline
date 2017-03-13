<!-- Lateral menu of our dashboard -->

@extends('layouts.app')

@section('panel')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ url('/home') }}">Panel De Control</a></div>
                <div class="panel-body">
                    <div class="panel-title">Bienvenido!</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ url('/user') }}">Usuarios</a></li>
                        <li class="list-group-item"><a href=""></a></li>
                        <li class="list-group-item"><a href=""></a></li>
                        <li class="list-group-item"><a href=""></a></li>
                        <li class="list-group-item"><a href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</div>

@endsection
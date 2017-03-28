<!-- Lateral menu of our dashboard -->

<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading"><a href="{{ url('/home') }}">Panel De Control</a></div>
        <div class="panel-body">
            <div class="panel-title">Bienvenido!</div>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('users.index') }}">  Usuarios</a></li>
                <li class="list-group-item"><a href="{{ route('roles.index') }}">Roles</a></li>
                <li class="list-group-item"><a href="{{ route('condos.index') }}">Condominios</a></li>
                <li class="list-group-item"><a href="{{ route('estates.index') }}">Condominos</a></li>
                <li class="list-group-item"><a href="{{ route('visitors.create') }}">Visitantes</a></li>
                <li class="list-group-item"><a href="{{ url('/income') }}">Ingresos</a></li>
            </ul>
        </div>
    </div>
</div>

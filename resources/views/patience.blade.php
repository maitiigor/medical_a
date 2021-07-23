@extends('layouts.app')
@section('content')
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Medical Record</h3>
        </div>

        <ul class="list-unstyled components">
            <p><a href="/health_worker">Dashboard</a></p>
            <p> Welcome {{$patience->name}} {{$patience->surname}}</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Patience</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="/register/patience">Register Patience</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/chat">Chat Doctor</a>
            </li>
        </ul>

    </nav>

   @endsection
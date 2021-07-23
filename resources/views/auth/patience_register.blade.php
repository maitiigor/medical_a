@extends('layouts.app')

@section('content')
    @include('layouts.sidebar')

    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-bar"></i>
                    <span class="fa fa-bars"></span>
                </button>


            </div>
        </nav>

        <div class="container-fluid">
            <patience-registration>

            </patience-registration>
        </div><!-- /.container-fluid -->

        <!--footer -->
    </div>
@endsection

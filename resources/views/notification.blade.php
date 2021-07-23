@extends('layouts.app')

@section('content')
    @include('layouts.sidebar')
    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fa fa-bar"></i>
                    <span class="fa fa-bars"></span>
                </button>


            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <caption>List of Patience</caption>
                            <thead>
                            <tr>

                                <th scope="col">
                                    ID
                                </th>
                                <th scope="col">
                                    Patience Name
                                </th>
                                <th scope="col">
                                    COMPLAINS
                                </th>
                                <th scope="col">
                                    DIAGNOSIS
                                </th>
                                <th scope="col">
                                    Weight
                                </th>
                                <th scope="col">
                                    Height
                                </th>
                                <th scope="col">
                                    BMI
                                </th> <th scope="col">
                                    Blood pressure
                                </th>
                                </th> <th scope="col">
                                    Treatment Plan
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <@foreach($notifications as $notification)
                            <tr>
                                <td>{{$notification->data['patience_id']}}</td>
                                <td>{{$notification->data['patience_name']}}</td>
                                <td>{{$notification->data['visit_type']}}</td>
                                <td>{{$notification->data['sender']}}</td>
                                <td>{{$notification->data['diagnosis']}}</td>
                                <td>{{$notification->data['weight']}}</td>

                                <td>{{$notification->data['height']}}</td>
                                <td>{{$notification->data['bmi']}}</td>
                                <td>{{$notification->data['blood_pressure']}}</td>
                                <td>{{$notification->data['treatment_plan']}}</td>

                            </tr>

                            @endforeach
                            </tbody>


                        </table>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
@endsection


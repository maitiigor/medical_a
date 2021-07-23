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

        <div class="container">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Patience Encounter</div>

                                <div class="card-body">
                                    <form method="POST" action="/patience_encounter/{{$patience->id}}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="visit_type" class="col-md-4 col-form-label text-md-right">First time/ Repeated visit</label>

                                            <div class="col-md-6">
                                                <select class="form-control" name="visit_type">
                                                    <option value="first time">First time</option>
                                                    <option value="Repeated">Visit</option>
                                                </select>

                                                @error('visit_type')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <bmi-compute></bmi-compute>
                                        <div class="form-group row">
                                            <label for="blood_pressure" class="col-md-4 col-form-label text-md-right">Blood pressure</label>

                                            <div class="col-md-6">
                                                <input id="blood_pressure" type="text" class="form-control @error('blood_pressure') is-invalid @enderror" name="blood_pressure" value="{{ old('blood_pressure') }}" required autocomplete="blood_pressure" autofocus>

                                                @error('blood_pressure')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="age" class="col-md-4 col-form-label text-md-right">Temperature</label>

                                            <div class="col-md-6">
                                                <input id="age" type="text" class="form-control @error('temperature') is-invalid @enderror" name="temperature" value="{{ old('temperature') }}" required autocomplete="temperature" autofocus>

                                                @error('temperature')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="respiratory_rate" class="col-md-4 col-form-label text-md-right">Respiratory Rate</label>

                                            <div class="col-md-6">
                                                <input id="respiratory_rate" type="text" class="form-control @error('respiratory_rate') is-invalid @enderror" name="respiratory_rate" value="{{ old('resiratory_rate') }}" required autocomplete="temperature" autofocus>

                                                @error('respiratory_rate')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="complaint" class="col-md-4 col-form-label text-md-right">Complaints</label>

                                            <div class="col-md-6">
                                                <input id="complaint" type="text" class="form-control @error('complaint') is-invalid @enderror" name="complaint" value="{{ old('complaint') }}" required autocomplete="complaint" autofocus>

                                                @error('complaint')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="diagnosis" class="col-md-4 col-form-label text-md-right">Diagnosis</label>

                                            <div class="col-md-6">
                                                <select id = "diagnosis" class ="form-control @error('diagnosis') is-invalid @enderror" name="diagnosis" required >
                                                    <option value=""> Select Diagnosis </option>
                                                    Pneumonia, Malaria, Diabetes
                                                    <option value="Hypertension"> Hypertension</option>
                                                    <option value="Pneumonia">Pneumonia </option>
                                                    <option value=" Malaria"> Malaria </option>
                                                    <option value="Diabetes"> Diabetes </option>

                                                </select>
                                                @error('diagnosis')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="treatment_plan" class="col-md-4 col-form-label text-md-right">Treatment Plan</label>

                                            <div class="col-md-6">
                                                <input id="treatment_plan" type="text" class="form-control @error('treatment_plan') is-invalid @enderror" name="treatment_plan" value="{{ old('treatment_plan') }}" required autocomplete="treatment_plan" autofocus>

                                                @error('treatment_plan')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-right">Send report to</label>
                                            <div class="col-md-6">

                                                <select id = "doctor_id" class ="form-control @error('diagnosis') is-invalid @enderror" name="doctor_id">

                                                    <option value=""> Selector Doctor Name </option>
                                                    Pneumonia, Malaria, Diabetes
                                                    @foreach($doctors as $doctor)
                                                        <option value="{{$doctor->id}}"> {{$doctor->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('diagnosis')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">

                                                <button type="submit" class="btn btn-primary">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection

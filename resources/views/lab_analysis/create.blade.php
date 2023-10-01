@extends('layouts.app')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lab Analysis</h1>
        <a href="{{ route('lab_analysis.index') }}" class="btn btn-success">Back to List</a>
    </div>
    <hr />

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('lab_analysis.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="operation_time_hr">Windrows Code</label>
                    <select class="form-control" id="windrows_code" name="windrows_code"  >
                        <option value="">Select Windrow Code</option>
                        @foreach ($windrow_code as $row)
                            <option value="{{ $row->id }}">{{ $row->windrow_code }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="analysis_complete_date"> Analysis Complete Date </label>
                    <input type="date" class="form-control timepicker" id="analysis_complete_date" name="analysis_complete_date" value="{{ old('analysis_complete_date') }}" >
                </div>

                <!-- Add other fields for the first column -->
            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="analysis_date">Analysis Date</label>
                    <input type="date" class="form-control timepicker" id="analysis_date" name="analysis_date" value="{{ old('analysis_date') }}"  >
                </div>

                <div class="form-group">
                    <label for="yesterday_left_over">Compositions</label>
                    <input type="text" class="form-control" id="compositions" name="compositions" value="{{ old('compositions') }}"  >
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="no_of_days">No Of Days</label>
                    <input type="number" class="form-control" id="no_of_days" name="no_of_days" value="{{ old('no_of_days') }}" readonly>
                </div>

                <div class="form-group">
                    <label for="avg_temp">Avg Temp °C</label>
                    <input type="number" class="form-control" id="avg_temp" name="avg_temp" value="{{ old('avg_temp') }}" step="0.01"  >
                </div>

                <!-- Add other fields for the first column -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="moisture">Moisture %</label>
                    <input type="number" class="form-control" id="moisture" name="moisture" value="{{ old('moisture') }}" step="0.01"  >
                </div>

                <div class="form-group">
                    <label for="organic_matter">Organic Matter</label>
                    <input type="number" class="form-control" id="organic_matter" name="organic_matter" value="{{ old('organic_matter') }}"  step="0.01">
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ph_value">Ph Value</label>
                    <input type="number" class="form-control" id="ph_value" name="ph_value" value="{{ old('ph_value') }}" step="0.01"  >
                </div>

                <div class="form-group">
                    <label for="elect_conductivity">Elect Conductivity</label>
                    <input type="number" class="form-control" id="elect_conductivity" name="elect_conductivity" value="{{ old('elect_conductivity') }}" step="0.01"  >
                </div>

                <!-- Add other fields for the first column -->
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="total_dissolve_salt">Total Dissolve Salt</label>
                    <input type="number" class="form-control" id="total_dissolve_salt" name="total_dissolve_salt" value="{{ old('total_dissolve_salt') }}" step="0.01" >
                </div>

                <div class="form-group">
                    <label for="cec">cec</label>
                    <input type="number" class="form-control" id="cec" name="cec" value="{{ old('cec') }}" step="0.01"  >
                </div>

                <!-- Add other fields for the second column -->
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="scm_total">Scm Total</label>
                    <input type="number" class="form-control" id="scm_total" name="scm_total" value="{{ old('scm_total') }}" step="0.01" >
                </div>

                <!-- Add other fields for the first column -->
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="datetime-local" class="form-control" id="date" name="date" value="{{ old('date') }}"  >
                </div>
            </div>
        </div> --}}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection


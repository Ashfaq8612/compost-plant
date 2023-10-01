@extends('layouts.app')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Edit Plant Operations</h1>
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

    <form action="{{ route('lab_analysis.update', $labAnalysis->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="windrows_code">Windrows Code</label>
                    <select class="form-control" id="windrows_code" name="windrows_code"   >
                        <option value="">Select Windrow Code</option>
                        @foreach ($windrow_code as $row)
                            <option value="{{ $row->id }}" {{ $labAnalysis->windrows_code == $row->id ? 'selected' : '' }}>{{ $row->windrow_code }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="analysis_complete_date">Analysis Complete Date</label>
                    <input type="date" class="form-control" id="analysis_complete_date" name="analysis_complete_date" value="{{ $labAnalysis->analysis_complete_date }}"   >
                </div>

                <!-- Add more fields here for the first column -->
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="analysis_date">Analysis Date</label>
                    <input type="date" class="form-control" id="analysis_date" name="analysis_date" value="{{ $labAnalysis->analysis_date }}"   >
                </div>

                <div class="form-group">
                    <label for="compositions">Compositions</label>
                    <input type="text" class="form-control" id="compositions" name="compositions" value="{{ $labAnalysis->compositions }}"   >
                </div>

                <!-- Add more fields here for the second column -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="no_of_days">No of Days</label>
                    <input type="number" class="form-control" id="no_of_days" name="no_of_days" value="{{ $labAnalysis->no_of_days }}" readonly>
                </div>

                <div class="form-group">
                    <label for="avg_temp">Average Temperature</label>
                    <input type="number" class="form-control" id="avg_temp" name="avg_temp" value="{{ $labAnalysis->avg_temp }}" step="0.01"   >
                </div>

                <!-- Add more fields here for the first column -->
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="moisture">Moisture</label>
                    <input type="number" class="form-control" id="moisture" name="moisture" value="{{ $labAnalysis->moisture }}" step="0.01"   >
                </div>

                <div class="form-group">
                    <label for="organic_matter">Organic Matter</label>
                    <input type="number" class="form-control" id="organic_matter" name="organic_matter" value="{{ $labAnalysis->organic_matter }}"   >
                </div>

                <!-- Add more fields here for the second column -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ph_value">pH Value</label>
                    <input type="number" class="form-control" id="ph_value" name="ph_value" value="{{ $labAnalysis->ph_value }}" step="0.01"   >
                </div>

                <div class="form-group">
                    <label for="elect_conductivity">Electrical Conductivity</label>
                    <input type="number" class="form-control" id="elect_conductivity" name="elect_conductivity" value="{{ $labAnalysis->elect_conductivity }}" step="0.01"   >
                </div>

                <!-- Add more fields here for the first column -->
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="total_dissolve_salt">Total Dissolved Salts</label>
                    <input type="number" class="form-control" id="total_dissolve_salt" name="total_dissolve_salt" value="{{ $labAnalysis->total_dissolve_salt }}"   >
                </div>

                <div class="form-group">
                    <label for="cec">CEC</label>
                    <input type="number" class="form-control" id="cec" name="cec" value="{{ $labAnalysis->cec }}"   >
                </div>

                <!-- Add more fields here for the second column -->
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

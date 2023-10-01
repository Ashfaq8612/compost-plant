@extends('layouts.app')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Plant Operations Details</h1>
        <a href="{{ route('lab_analysis.index') }}" class="btn btn-success">Back to List</a>
    </div>
    <hr />

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="windrows_code">Windrows Code</label>
                <input type="text" class="form-control" id="windrows_code" value="{{ $labAnalysis->windrows_code }}" readonly>
            </div>

            <div class="form-group">
                <label for="analysis_complete_date">Analysis Complete Date</label>
                <input type="text" class="form-control" id="analysis_complete_date" value="{{ $labAnalysis->analysis_complete_date }}" readonly>
            </div>

            <!-- Add more fields here for the first column -->
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="analysis_date">Analysis Date</label>
                <input type="text" class="form-control" id="analysis_date" value="{{ $labAnalysis->analysis_date }}" readonly>
            </div>

            <div class="form-group">
                <label for="compositions">Compositions</label>
                <input type="text" class="form-control" id="compositions" value="{{ $labAnalysis->compositions }}" readonly>
            </div>

            <!-- Add more fields here for the second column -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_of_days">No of Days</label>
                <input type="text" class="form-control" id="no_of_days" value="{{ $labAnalysis->no_of_days }}" readonly>
            </div>

            <div class="form-group">
                <label for="avg_temp">Average Temperature</label>
                <input type="text" class="form-control" id="avg_temp" value="{{ $labAnalysis->avg_temp }}°C" readonly>
            </div>

            <!-- Add more fields here for the first column -->
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="moisture">Moisture</label>
                <input type="text" class="form-control" id="moisture" value="{{ $labAnalysis->moisture }}%" readonly>
            </div>

            <div class="form-group">
                <label for="organic_matter">Organic Matter</label>
                <input type="text" class="form-control" id="organic_matter" value="{{ $labAnalysis->organic_matter }}" readonly>
            </div>

            <!-- Add more fields here for the second column -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="ph_value">pH Value</label>
                <input type="text" class="form-control" id="ph_value" value="{{ $labAnalysis->ph_value }}" readonly>
            </div>

            <div class="form-group">
                <label for="elect_conductivity">Electrical Conductivity</label>
                <input type="text" class="form-control" id="elect_conductivity" value="{{ $labAnalysis->elect_conductivity }}" readonly>
            </div>

            <!-- Add more fields here for the first column -->
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="total_dissolve_salt">Total Dissolved Salts</label>
                <input type="text" class="form-control" id="total_dissolve_salt" value="{{ $labAnalysis->total_dissolve_salt }}" readonly>
            </div>

            <div class="form-group">
                <label for="cec">CEC (Cation Exchange Capacity)</label>
                <input type="text" class="form-control" id="cec" value="{{ $labAnalysis->cec }}" readonly>
            </div>

            <!-- Add more fields here for the second column -->
        </div>
    </div>
</div>
@endsection

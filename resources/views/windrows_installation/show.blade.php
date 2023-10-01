@extends('layouts.app')

@section('title', 'Show Record')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Details</h1>

        <div class="ml-auto">
            <a href="{{ route('windrows_installation.index') }}" class="btn btn-success">Back to List</a>
            <button class="btn btn-secondary ml-2" onclick="printRecord()">Print</button>
            <a href="#" class="btn btn-primary ml-2">Download as PDF</a>
        </div>
    </div>
    <hr />
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Windrow Code</label>
            <input type="text" name="windrow_code" class="form-control" value="{{ $installation->windrow_code }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Weight</label>
            <input type="text" name="weight" class="form-control" value="{{ $installation->weight }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Installation Date</label>
            <input type="text" name="installation_date" class="form-control"  value="{{ \Carbon\Carbon::parse($installation->installation_date)->format('d F Y') }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">No Of Days</label>
            <input type="text" name="no_of_days" class="form-control" value="{{ $installation->no_of_days }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Compositions</label>
            <input type="text" name="compositions" class="form-control" value="{{ $installation->compositions }}" readonly>
        </div>

        <div class="col">
            <label class="form-label">No Of Turnings</label>
            <input type="text" name="no_of_turnings" class="form-control" value="{{ $installation->no_of_turnings }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" value="{{ $installation->status }}" readonly>
        </div>
        <div class="col mt-4">
            {{-- <a href="{{ route('waste_intakes.edit', $wasteIntake->id) }}" class="btn btn-primary">Edit</a> --}}
        </div>
    </div>

</div>
@endsection

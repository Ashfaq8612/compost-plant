@extends('layouts.app')

@section('title', 'Show Record')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Details</h1>

        <div class="ml-auto">
            <a href="{{ route('waste_intakes.index') }}" class="btn btn-success">Back to List</a>
            <button class="btn btn-secondary ml-2" onclick="printRecord()">Print</button>
            <a href="#" class="btn btn-primary ml-2">Download as PDF</a>
        </div>
    </div>
    <hr />
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">MSW</label>
            <input type="text" name="msw" class="form-control" value="{{ $wasteIntake->msw }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Cow Dung</label>
            <input type="text" name="cow_dung" class="form-control" value="{{ $wasteIntake->cow_dung }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Egg Shell</label>
            <input type="text" name="egg_shell" class="form-control" value="{{ $wasteIntake->egg_shell }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Green Waste</label>
            <input type="text" name="green_waste" class="form-control" value="{{ $wasteIntake->green_waste }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Date</label>
            <input type="text" name="date" class="form-control" value="{{ \Carbon\Carbon::parse($wasteIntake->date)->format('d F Y') }}" readonly>
        </div>
        <div class="col mt-4">
            {{-- <a href="{{ route('waste_intakes.edit', $wasteIntake->id) }}" class="btn btn-primary">Edit</a> --}}
        </div>
    </div>
</div>
@endsection

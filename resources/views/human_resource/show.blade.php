@extends('layouts.app')

@section('title', 'Show Record')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Details</h1>
        <div>
            <a href="{{ route('human_resource.index') }}" class="btn btn-success">Back to List</a>
            <button class="btn btn-secondary" onclick="printRecord()">Print</button>
            <a href="#" class="btn btn-primary">Download as PDF</a>
        </div>
    </div>
    <hr />
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="present_employees">Total Present Employees</label>
                <input type="text" name="present_employees" class="form-control" value="{{ $humanResource->present_employees }}" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="absent_employees">Total Absent Employees</label>
                <input type="text" name="absent_employees" class="form-control" value="{{ $humanResource->absent_employees }}" readonly>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" name="date" class="form-control" value="{{ \Carbon\Carbon::parse($humanResource->date)->format('d F Y') }}" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-4">
            {{-- <a href="{{ route('human_resource.edit', $humanResource->id) }}" class="btn btn-primary">Edit</a> --}}
        </div>
    </div>
</div>
@endsection

<!-- JavaScript -->
<script>
    function printRecord() {
        window.print();
    }
</script>

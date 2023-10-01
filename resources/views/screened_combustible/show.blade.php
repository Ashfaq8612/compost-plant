@extends('layouts.app')

@section('title', 'Show Record')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Details</h1>
        <div>
            <a href="{{ route('screen_combustible.index') }}" class="btn btn-success">Back to List</a>
            <button class="btn btn-secondary" onclick="printRecord()">Print</button>
            <a href="#" class="btn btn-primary">Download as PDF</a>
        </div>
    </div>
    <hr />
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="total_scm_received">Total SCM Received</label>
                <input type="text" name="total_scm_received" class="form-control" value="{{ $material->total_scm_received }}" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="bail_created">Bail Created</label>
                <input type="text" name="bail_created" class="form-control" value="{{ $material->bail_created }}" readonly>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" name="date" class="form-control" value="{{ \Carbon\Carbon::parse($material->date)->format('d F Y') }}" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="operation_hrs">Operation Hrs</label>
                <input type="text" name="date" class="form-control" value="{{$material->operation_hrs}}" readonly>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- <div class="col-md-6 mt-4">
            <a href="{{ route('screen_combustible.edit', $material->id) }}" class="btn btn-primary">Edit</a>
        </div> --}}
    </div>
</div>
@endsection

<!-- JavaScript -->
<script>
    function printRecord() {
        window.print();
    }
</script>

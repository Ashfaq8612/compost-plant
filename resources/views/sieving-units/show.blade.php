@extends('layouts.app')

@section('contents')
<div class="container">
    <h1>Sieving Unit Details</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="windrows_code">Windrows Code</label>
                <input type="text" class="form-control" id="windrows_code" name="windrows_code" value="{{ $sievingUnit->windrows_code }}" readonly>
            </div>
            <div class="form-group">
                <label for="production">Production</label>
                <input type="text" class="form-control" id="production" name="production" value="{{ $sievingUnit->production }}" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="rejection">Rejection</label>
                <input type="text" class="form-control" id="rejection" name="rejection" value="{{ $sievingUnit->rejection }}" readonly>
            </div>
            <div class="form-group">
                <label for="operation_time">Operation Time</label>
                <input type="text" class="form-control" id="operation_time" name="operation_time" value="{{ $sievingUnit->operation_time }}" readonly>
            </div>
        </div>
    </div>

    <a href="{{ route('sieving-units.edit', $sievingUnit->id) }}" class="btn btn-warning">Edit</a>
</div>
@endsection

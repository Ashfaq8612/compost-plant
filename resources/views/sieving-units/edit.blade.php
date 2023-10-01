@extends('layouts.app')

@section('contents')
<div class="container">
    <h1>Edit Sieving Unit</h1>

    <form action="{{ route('sieving-units.update', $sievingUnit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="windrows_code">Windrows Code</label>
                    <select class="form-control" id="windrows_code" name="windrows_code"   >
                        <option value="">Select Windrow Code</option>
                        @foreach ($windrow_code as $row)
                            <option value="{{ $row->id }}" {{ $sievingUnit->windrows_code == $row->id ? 'selected' : '' }}>{{ $row->windrow_code }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="production">Production</label>
                    <input type="text" class="form-control" id="production" name="production" value="{{ $sievingUnit->production }}"   >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rejection">Rejection</label>
                    <input type="text" class="form-control" id="rejection" name="rejection" value="{{ $sievingUnit->rejection }}"   >
                </div>
                <div class="form-group">
                    <label for="operation_time">Operation Time</label>
                    <input type="text" class="form-control" id="operation_time" name="operation_time" value="{{ $sievingUnit->operation_time }}"   >
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection


@extends('layouts.app')

@section('contents')
<div class="container">
    <h1>Create Sieving Unit</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('sieving-units.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="windrows_code">Windrows Code</label>
                    <select class="form-control" id="windrows_code" name="windrows_code"   >
                        <option value="">Select Windrow Code</option>
                        @foreach ($windrow_code as $row)
                            <option value="{{ $row->id }}">{{ $row->windrow_code }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="production">Production</label>
                    <input type="text" class="form-control" id="production" name="production"   >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rejection">Rejection</label>
                    <input type="text" class="form-control" id="rejection" name="rejection"   >
                </div>
                <div class="form-group">
                    <label for="operation_time">Operation Time</label>
                    <input type="text" class="form-control" id="operation_time" name="operation_time"   >
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection

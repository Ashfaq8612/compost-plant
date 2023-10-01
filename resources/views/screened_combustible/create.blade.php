@extends('layouts.app')

@section('title', 'Screen Combustible')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Add Record</h1>
        <a href="{{ route('screen_combustible.index') }}" class="btn btn-success">Back to List</a>
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
    <form action="{{ route('screen_combustible.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="total_scm_received">Total SCM Received</label>
                    <input type="number" name="total_scm_received" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="bail_created">Bails Created</label>
                    <input type="number" name="bail_created" class="form-control">
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control timepicker">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="operation_hrs">Operation Hrs</label>
                    <input type="number" name="operation_hrs" class="form-control" step="0.01">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="d-grid mt-4 ml-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection

<script>
    $(function () {
        $('.timepicker').timepicker();
    });
</script>

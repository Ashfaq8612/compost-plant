@extends('layouts.app')

@section('title', 'Update Record')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Update Record</h1>
        <a href="{{ route('screen_combustible.index') }}" class="btn btn-success">Back to List</a>
    </div>
    <hr />
    <form action="{{ route('screen_combustible.update', $material->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="total_scm_received">Total SCM Received</label>
                    <input type="text" name="total_scm_received" class="form-control" value="{{ $material->total_scm_received }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="bail_created">Bails Created</label>
                    <input type="text" name="bail_created" class="form-control" value="{{ $material->bail_created }}">
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control timepicker" value="{{ $material->date }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="operation_hrs">Operation Hrs</label>
                    <input type="number" name="operation_hrs" class="form-control" value="{{ $material->operation_hrs }}" step="0.01">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mt-4">
                <button type="submit" class="btn btn-primary">Update</button>
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

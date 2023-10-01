@extends('layouts.app')

@section('title', 'Create Windrow')

@section('contents')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Update Add Record</h1>
            <a href="{{ route('windrows_installation.index') }}" class="btn btn-success">Back to List</a>
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

        <form action="{{ route('windrows_installation.update', $installation->id) }}" method="POST"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="windrow_code">Windrow Code</label>
                        <input type="text" name="windrow_code" class="form-control"
                            value="{{ $installation->windrow_code }}" required>
                    </div>

                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="number" name="weight" class="form-control" step="0.01"
                            value="{{ $installation->weight }}">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="installation_date">Installation Date</label>
                        <input type="date" name="installation_date" class="form-control timepicker"
                            value="{{ $installation->installation_date }}" required>
                    </div>

                    <div class="form-group">
                        <label for="no_of_days">No Of Days</label>
                        <input class="form-control" name="no_of_days" type="number"
                            value="{{ $installation->no_of_days }}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="compositions">Compositions</label>
                        <input type="text" name="compositions" class="form-control"
                            value="{{ $installation->compositions }}">
                    </div>

                    <div class="form-group">
                        <label for="no_of_turnings">No Of Turnings</label>
                        <input type="number" name="no_of_turnings" class="form-control"
                            value="{{ $installation->no_of_turnings }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="inprogress" {{ $installation->status == 'inprogress' ? 'selected' : '' }}>In Progress</option>
                            <option value="complete" {{ $installation->status == 'complete' ? 'selected' : '' }}>Complete</option>
                        </select>
                    </div>
                </div>

            <div class="row">
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(function() {
            $('.timepicker').timepicker();
        });
    </script>
@endsection

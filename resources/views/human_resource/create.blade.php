@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Add New Record</h1>
            <a href="{{ route('human_resource.index') }}" class="btn btn-success">Back to List</a>
        </div>
        <hr />
        <form action="{{ route('human_resource.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label for="present_employees">Total Present Employee</label>
                    <input type="number" name="present_employees" class="form-control">
                </div>
                <div class="col">
                    <label for="absent_employees">Total Absent Employee</label>
                    <input type="number" name="absent_employees" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date">Date </label>
                        <input type="date" name="date" class="form-control timepicker">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(function () {
            $('.timepicker').timepicker();
        });
    </script>
@endsection

@extends('layouts.app')

@section('title', 'Update Record')

@section('contents')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Update Record</h1>
            <a href="{{ route('human_resource.index') }}" class="btn btn-success">Back to List</a>
        </div>
        <hr />
        <form action="{{ route('human_resource.update', $humanResource->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="present_employees">Total Present Employees</label>
                        <input type="text" name="present_employees" class="form-control" value="{{ $humanResource->present_employees }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="absent_employees">Total Absent Employees</label>
                        <input type="text" name="absent_employees" class="form-control" value="{{ $humanResource->absent_employees }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" class="form-control timepicker" value="{{ $humanResource->date }}">
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
    <script>
        $(function () {
            $('.timepicker').timepicker();
        });
    </script>
@endsection

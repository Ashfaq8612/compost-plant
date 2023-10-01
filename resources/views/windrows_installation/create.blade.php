@extends('layouts.app')

@section('title', 'Create Windrow')

@section('contents')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Add Record</h1>
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

        <form action="{{ route('windrows_installation.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="windrow_code">Windrow Code</label>
                            <input type="text" name="windrow_code" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input type="number" name="weight" class="form-control"  step="0.01">
                        </div>

                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="installation_date">Installation Date</label>
                                <input type="date" name="installation_date" class="form-control timepicker" required>
                            </div>

                            <div class="form-group">
                                <label for="no_of_days">No Of Days</label>
                                <input class="form-control" name="no_of_days" type="number" readonly>
                            </div>
                        </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="compositions">Compositions</label>
                        <input type="text" name="compositions" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_of_turnings">No Of Turnings</label>
                        <input type="number" name="no_of_turnings" class="form-control ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="inprogress" >In Progress</option>
                            <option value="complete" >Complete</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="d-grid">
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

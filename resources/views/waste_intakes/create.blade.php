@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Add Record</h1>
            <a href="{{ route('waste_intakes.index') }}" class="btn btn-success">Back to List</a>
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

        <form action="{{ route('waste_intakes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="MSW">MSW</label>
                        <input type="number" name="msw" class="form-control" step="0.01">
                    </div>

                    <div class="form-group">
                        <label for="Cow Dung">Cow Dung</label>
                        <input type="number" name="cow_dung" class="form-control" step="0.01">
                    </div>

                    <!-- Add other fields for the first column -->
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Egg Shell">Egg Shell</label>
                        <input type="number" name="egg_shell" class="form-control" step="0.01">
                    </div>

                    <div class="form-group">
                        <label for="Green Waste">Green Waste</label>
                        <input class="form-control" name="green_waste" step="0.01">
                    </div>

                    <!-- Add other fields for the second column -->
                </div>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control timepicker">
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

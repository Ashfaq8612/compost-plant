@extends('layouts.app')

@section('contents')
<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Plant Operations</h1>
        <a href="{{ route('plant_operations.index') }}" class="btn btn-success">Back to List</a>
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

    <form action="{{ route('plant_operations.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="operation_time_hr">Opt Time (hrs)</label>
                    <input type="number" class="form-control" id="operation_time_hr" name="operation_time_hr" value="{{ old('operation_time_hr') }}"   >
                </div>

                <div class="form-group">
                    <label for="waste_processing">Waste Process</label>
                    <input type="number" class="form-control" id="waste_processing" name="waste_processing" value="{{ old('waste_processing') }}"   >
                </div>

                <!-- Add other fields for the first column -->
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="total_msw_recieved">Msw Recieved</label>
                    <input type="number" class="form-control" id="total_msw_recieved" name="total_msw_recieved" value="{{ old('total_msw_recieved') }}"   >
                </div>

                <div class="form-group">
                    <label for="yesterday_left_over">Yest Left Over</label>
                    <input type="number" class="form-control" id="yesterday_left_over" name="yesterday_left_over" value="{{ old('yesterday_left_over') }}"   >
                </div>

                <!-- Add other fields for the second column -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="consume">Consume</label>
                    <input type="number" class="form-control" id="consume" name="consume" value="{{ old('consume') }}"   >
                </div>

                <div class="form-group">
                    <label for="rejection">Rejection</label>
                    <input type="number" class="form-control" id="rejection" name="rejection" value="{{ old('rejection') }}"   >
                </div>

                <!-- Add other fields for the first column -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="balance">Balance</label>
                    <input type="number" class="form-control" id="balance" name="balance" value="{{ old('balance') }}"   >
                </div>

                <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="number" class="form-control" id="bio" name="bio" value="{{ old('bio') }}"   >
                </div>

                <!-- Add other fields for the second column -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rejection_mt">Rejection MT</label>
                    <input type="number" class="form-control" id="rejection_mt" name="rejection_mt" value="{{ old('rejection_mt') }}"   >
                </div>

                <div class="form-group">
                    <label for="scm_mt">Scm MT</label>
                    <input type="number" class="form-control" id="scm_mt" name="scm_mt" value="{{ old('scm_mt') }}"   >
                </div>

                <!-- Add other fields for the first column -->
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="previous_scm">Previous Scm</label>
                    <input type="number" class="form-control" id="previous_scm" name="previous_scm" value="{{ old('previous_scm') }}"   >
                </div>

                <div class="form-group">
                    <label for="scm_received">Scm Received</label>
                    <input type="number" class="form-control" id="scm_received" name="scm_received" value="{{ old('scm_received') }}"   >
                </div>

                <!-- Add other fields for the second column -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="scm_total">Scm total</label>
                    <input type="number" class="form-control" id="scm_total" name="scm_total" value="{{ old('scm_total') }}"   >
                </div>

                <!-- Add other fields for the first column -->
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}"   >
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection


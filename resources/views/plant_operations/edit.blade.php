@extends('layouts.app')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Edit Plant Operation</h1>
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

    <form action="{{ route('plant_operations.update', $plantOperation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="operation_time_hr">Opt Time (hrs)</label>
                    <input type="number" class="form-control" id="operation_time_hr" name="operation_time_hr" value="{{ $plantOperation->operation_time_hr }}"   >
                </div>

                <div class="form-group">
                    <label for="waste_processing">Waste Proc</label>
                    <input type="number" class="form-control" id="waste_processing" name="waste_processing" value="{{ $plantOperation->waste_processing }}"   >
                </div>

                <div class="form-group">
                    <label for="total_msw_recieved">Msw_Recieved</label>
                    <input type="number" class="form-control" id="total_msw_recieved" name="total_msw_recieved" value="{{ $plantOperation->total_msw_recieved }}"   >
                </div>

                <div class="form-group">
                    <label for="yesterday_left_over">Yest_Left_Over</label>
                    <input type="number" class="form-control" id="yesterday_left_over" name="yesterday_left_over" value="{{ $plantOperation->yesterday_left_over }}"   >
                </div>

                <div class="form-group">
                    <label for="consume">Consume</label>
                    <input type="number" class="form-control" id="consume" name="consume" value="{{ $plantOperation->consume }}"   >
                </div>

                <div class="form-group">
                    <label for="rejection">Rejection</label>
                    <input type="number" class="form-control" id="rejection" name="rejection" value="{{ $plantOperation->rejection }}"   >
                </div>

                <div class="form-group">
                    <label for="balance">Balance</label>
                    <input type="number" class="form-control" id="balance" name="balance" value="{{ $plantOperation->balance }}"   >
                </div>


            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="number" class="form-control" id="bio" name="bio" value="{{ $plantOperation->bio }}"   >
                </div>

                <div class="form-group">
                    <label for="rejection_mt">Rejection_mt</label>
                    <input type="number" class="form-control" id="rejection_mt" name="rejection_mt" value="{{ $plantOperation->rejection_mt }}"   >
                </div>
                <div class="form-group">
                    <label for="scm_mt">Scm_Mt</label>
                    <input type="number" class="form-control" id="scm_mt" name="scm_mt" value="{{ $plantOperation->scm_mt }}"   >
                </div>

                <div class="form-group">
                    <label for="previous_scm">Previous_Scm</label>
                    <input type="number" class="form-control" id="previous_scm" name="previous_scm" value="{{ $plantOperation->previous_scm }}"   >
                </div>

                <div class="form-group">
                    <label for="scm_recieved">Scm_Received</label>
                    <input type="number" class="form-control" id="scm_received" name="scm_received" value="{{ $plantOperation->scm_received }}"   >
                </div>

                <div class="form-group">
                    <label for="scm_total">Scm_total</label>
                    <input type="number" class="form-control" id="scm_total" name="scm_total" value="{{ $plantOperation->scm_total }}"   >
                </div>

                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control timepicker" id="date" name="date" value="{{ $plantOperation->date }}"   >
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection

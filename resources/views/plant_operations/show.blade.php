@extends('layouts.app')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Plant Operation Details</h1>

        <div>
            <a href="{{ route('plant_operations.index') }}" class="btn btn-success">Back to List</a>
            <button class="btn btn-secondary" onclick="printRecord()">Print</button>
            <a href="#" class="btn btn-primary">Download as PDF</a>
        </div>
    </div>
    <hr />

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="operation_time_hr">Opt Time (hrs)</label>
                <input type="text" class="form-control" id="operation_time_hr" value="{{ $plantOperation->operation_time_hr }}" readonly>
            </div>

            <div class="form-group">
                <label for="waste_processing">Waste Proc</label>
                <input type="text" class="form-control" id="waste_processing" value="{{ $plantOperation->waste_processing }}" readonly>
            </div>

            <div class="form-group">
                <label for="total_msw_recieved">Msw_Recieved</label>
                <input type="text" class="form-control" id="total_msw_recieved" value="{{ $plantOperation->total_msw_recieved }}" readonly>
            </div>

            <div class="form-group">
                <label for="yesterday_left_over">Yest_Left_Over</label>
                <input type="text" class="form-control" id="yesterday_left_over" value="{{ $plantOperation->yesterday_left_over }}" readonly>
            </div>

            <div class="form-group">
                <label for="consume">Consume</label>
                <input type="text" class="form-control" id="consume" value="{{ $plantOperation->consume }}" readonly>
            </div>

            <div class="form-group">
                <label for="rejection">Rejection</label>
                <input type="text" class="form-control" id="rejection" value="{{ $plantOperation->rejection }}" readonly>
            </div>

            <div class="form-group">
                <label for="balance">Balance</label>
                <input type="text" class="form-control" id="balance" value="{{ $plantOperation->balance }}" readonly>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" class="form-control" id="bio" value="{{ $plantOperation->bio }}" readonly>
            </div>

            <div class="form-group">
                <label for="rejection_mt">Rejection_mt</label>
                <input type="text" class="form-control" id="rejection_mt" value="{{ $plantOperation->rejection_mt }}" readonly>
            </div>

            <div class="form-group">
                <label for="scm_mt">Scm_Mt</label>
                <input type="text" class="form-control" id="scm_mt" value="{{ $plantOperation->scm_mt }}" readonly>
            </div>

            <div class="form-group">
                <label for="previous_scm">Previous_Scm</label>
                <input type="text" class="form-control" id="previous_scm" value="{{ $plantOperation->previous_scm }}" readonly>
            </div>

            <div class="form-group">
                <label for="scm_received">Scm_Received</label>
                <input type="text" class="form-control" id="scm_received" value="{{ $plantOperation->scm_received }}" readonly>
            </div>

            <div class="form-group">
                <label for="scm_total">Scm_total</label>
                <input type="text" class="form-control" id="scm_total" value="{{ $plantOperation->scm_total }}" readonly>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" class="form-control" id="date" value="{{ $plantOperation->date }}" readonly>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    // function printRecord() {
    //     var printWindow = window.open('', '_blank');
    //     var contentToPrint = document.getElementById('content-to-print').innerHTML;
    //     printWindow.document.write('<html><head><title>Plant Operation Details</title></head><body>' + contentToPrint + '</body></html>');
    //     printWindow.document.close();
    //     printWindow.print();
    // }
</script>
@endsection

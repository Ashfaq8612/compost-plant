@extends('layouts.app')

@section('title', 'Update Record')

@section('contents')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Update Record</h1>
        <a href="{{ route('waste_intakes.index') }}" class="btn btn-success">Back to List</a>
    </div>
    <hr />

    <form action="{{ route('waste_intakes.update', $wasteIntake->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="MSW">MSW</label>
                    <input type="number" name="msw" class="form-control" value="{{ $wasteIntake->msw }}" step="0.01">
                </div>

                <div class="form-group">
                    <label for="Cow Dung">Cow Dung</label>
                    <input type="number" name="cow_dung" class="form-control" value="{{ $wasteIntake->cow_dung }}" step="0.01">
                </div>

            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="Egg Shell">Egg Shell</label>
                    <input type="number" name="egg_shell" class="form-control" value="{{ $wasteIntake->egg_shell }}" step="0.01">
                </div>

                <div class="form-group">
                    <label for="Green Waste">Green Waste</label>
                    <input class="form-control" name="green_waste" value="{{ $wasteIntake->green_waste }}" step="0.01">
                </div>

            </div>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control timepicker" value="{{$wasteIntake->date}}">
        </div>

        <div class="row">
            <div class="d-grid">
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

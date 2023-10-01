@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Add New Inventory</h1>
        <a href="{{ route('inventories20kg.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
    <hr />

    <form action="{{ route('inventories20kg.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="opening_stock">Opening Stock:KG</label>
                <input type="number" class="form-control" id="opening_stock" name="opening_stock"  step="0.01">
            </div>
            <div class="form-group col-md-6">
                <label for="production">Production:KG</label>
                <input type="number" class="form-control" id="production" name="production"  step="0.01">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="dispatch">Dispatch:KG</label>
                <input type="number" class="form-control" id="dispatch" name="dispatch"  step="0.01">
            </div>
            {{-- <div class="form-group col-md-6">
                <label for="recycle">Recycle:KG</label>
                <input type="text" class="form-control" id="recycle" name="recycle"  step="0.01">
            </div> --}}
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
        </div>
        <div class="form-row">
            {{-- <div class="form-group col-md-6">
                <label for="balance">Balance:KG</label>
                <input type="text" class="form-control" id="balance" name="balance"  step="0.01">
            </div> --}}

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

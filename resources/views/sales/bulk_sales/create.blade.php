@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Bulk Sales Record</h1>
        <a href="{{ route('bulk_sales.index') }}" class="btn btn-secondary">Back to Sales</a>
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
    <form action="{{ route('bulk_sales.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="invoice_num">Invoice Number</label>
                <input type="text" class="form-control" id="invoice_num" name="invoice_num" required>
            </div>
            <div class="form-group col-md-6">
                <label for="quantity_sold">Quantity Sold(Kg)</label>
                <input type="number" class="form-control" id="quantity_sold" name="quantity_sold" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="invoice">Upload Invoice</label>
                <input type="file" name="invoice" accept=".jpg, .jpeg, .png, .pdf"  class="form-control" >
            </div>
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Update Sale Record</h1>
        <a href="{{ route('sales_5kg.index') }}" class="btn btn-secondary">Back to Sales</a>
    </div>
    <hr />

    <form action="{{ route('sales_5kg.update', $sale->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="invoice_num">Invoice Number</label>
                <input type="text" class="form-control" id="invoice_num" name="invoice_num" required value={{ $sale->invoice_num }} placeholder='Invoice Number'>
            </div>
            <div class="form-group col-md-6">
                <label for="quantity_sold">Quantity Sold(Kg)</label>
                <input type="number" class="form-control" id="quantity_sold" name="quantity_sold" required value={{ $sale->quantity_sold }} placeholder="Quantity Sold">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="invoice">Upload Invoice</label>
                @if($sale->invoice)
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="invoice" accept=".jpg, .jpeg, .png, .pdf" class="custom-file-input" id="invoiceInput">
                        <label class="custom-file-label" for="invoiceInput">{{ $sale->invoice }}</label>
                    </div>
                </div>
                @else
                <input type="file" name="invoice" accept=".jpg, .jpeg, .png, .pdf" class="form-control">
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required value={{ $sale->date }}>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

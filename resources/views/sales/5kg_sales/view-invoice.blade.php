@extends('layouts.app')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">5Kg Sales Invoice</h1>
    <a href="{{ route('sales_5kg.index') }}" class="btn btn-secondary">Back to Sales</a>
</div>
<hr />
<img
src="{{ asset('storage/' . $sale->invoice) }}"
alt="Invoice Not Available"
width="80%"
height="60%"
>
@endsection

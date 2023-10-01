@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Bulk Sales</h1>
        <a href="{{ route('bulk_sales.create') }}" class="btn btn-primary">Add New Sales</a>
    </div>
    <hr />
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Invoice Num</th>
                <th>Quantity Sold</th>
                <th>Price Per KG</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Invoice</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(count($bulkSales) > 0)
            @foreach($bulkSales as $key => $bulkSale)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $bulkSale->invoice_num }}</td>
                    <td>{{ $bulkSale->quantity_sold }}</td>
                    <td>{{ $bulkSale->price_per_kg }}</td>
                    <td>{{ $bulkSale->total_price }}</td>
                    <td>{{ $bulkSale->date }}</td>
                    <td>
                        @if($bulkSale->invoice)
                        <a href="{{ asset('storage/' . $bulkSale->invoice) }}" target="_blank"  class="btn btn-primary">View Current Invoice</a>
                        @else
                        NO File Upload
                        @endif
                    </td>
                    <td>
                         <a href="{{ route('bulk_sales.edit', $bulkSale->id) }}" class="btn btn-sm btn-info">Edit</a>
                         <form action="{{ route('bulk_sales.destroy', $bulkSale->id) }}" method="POST" style="display: inline-block" class="del">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete()">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @endif

        </tbody>
    </table>
    <script>
        function confirmDelete() {
            if (window.confirm('Are you sure you want to delete this record?')) {
                // If the user confirms, submit the form for deletion
                document.querySelector('.del').submit();
            }
        }
    </script>
@endsection

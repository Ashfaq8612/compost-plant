@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Bulk Inventories</h1>
        <a href="{{ route('inventories.create') }}" class="btn btn-primary">Add New Inventory</a>
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
                <th>Opening Stock:MT</th>
                <th>Production:MT</th>
                <th>Dispatch:MT</th>
                <th>Recycle:MT</th>
                <th>Balance:MT</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventories as $key => $inventory)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $inventory->opening_stock }}</td>
                    <td>{{ $inventory->production }}</td>
                    <td>{{ $inventory->dispatch }}</td>
                    <td>{{ $inventory->recycle }}</td>
                    <td>{{ $inventory->balance }}</td>
                    <td>{{ $inventory->date }}</td>
                    <td>
                        <!--<a href="{{ route('inventories.show', $inventory->id) }}" class="btn btn-sm btn-info">View</a>-->
                            <a href="#" class="btn btn-sm btn-info">View</a>

                        <a href="{{ route('inventories.edit', $inventory->id) }}" class="btn btn-sm btn-warning">Edit</a>
                         <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

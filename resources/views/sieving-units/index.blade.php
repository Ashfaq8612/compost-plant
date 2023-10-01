@extends('layouts.app')

@section('contents')
<div class="container">
    <h1>Sieving Units</h1>
    <a href="{{ route('sieving-units.create') }}" class="btn btn-primary mb-3">Add New</a>

    <table class="table">
        <thead>
            <tr>
                <th>Windrow Code</th>
                <th>Production</th>
                <th>Rejection</th>
                <th>Operation Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sievingUnits as $sievingUnit)
                <tr>
                    <td>{{ $sievingUnit->windrow_code }}</td>
                    <td>{{ $sievingUnit->production }}</td>
                    <td>{{ $sievingUnit->rejection }}</td>
                    <td>{{ $sievingUnit->operation_time }}</td>
                    <td>
                        <a href="{{ route('sieving-units.show', $sievingUnit->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('sieving-units.edit', $sievingUnit->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        {{-- <a href="{{ route('sieving-units.destroy', $sievingUnit->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                        <form action="{{ route('sieving-units.destroy',  $sievingUnit->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        <!-- Add delete button if needed -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

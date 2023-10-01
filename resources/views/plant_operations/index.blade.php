@extends('layouts.app')

@section('contents')
    <style>
        .table-responsive {
            overflow-x: auto;
        }

        /* Adjust the table width to fit the content section */
        .table {
            width: 100%;
        }

        /* Prevent date cell from wrapping */
        .nowrap {
            white-space: nowrap;
        }
    </style>

    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Plant Operations</h1>
        <a href="{{route('plant_operations.create')}}" class="btn btn-primary">Add Record</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Opt Time(hrs)</th>
                <th scope="col">Waste Proccessing</th>
                <th scope="col">Msw Recieved</th>
                <th scope="col">Yest Left Over</th>
                <th scope="col">Consume</th>
                <th scope="col">Rejection</th>
                <th scope="col">Balance</th>
                <th scope="col">Bio</th>
                <th scope="col">Rejection Mt</th>
                <th scope="col">Scm Mt</th>
                <th scope="col">Previous Scm</th>
                <th scope="col">Scm Received</th>
                <th scope="col">Scm Total</th>
                <th scope="col">Date</th>
                <th scope="col" colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($plantOperations->count() > 0)
                @foreach($plantOperations as $key => $record)
                    <tr scope="row">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $record->operation_time_hr }}</td>
                        <td>{{ $record->waste_processing }}</td>
                        <td>{{ $record->total_msw_recieved }}</td>
                        <td>{{ $record->yesterday_left_over }}</td>
                        <td>{{ $record->consume }}</td>
                        <td>{{ $record->rejection }}</td>
                        <td>{{ $record->balance }}</td>
                        <td>{{ $record->bio }}</td>
                        <td>{{ $record->rejection_mt }}</td>
                        <td>{{ $record->scm_mt }}</td>
                        <td>{{ $record->previous_scm }}</td>
                        <td>{{ $record->scm_received }}</td>
                        <td>{{ $record->scm_total }}</td>
                        <td class="nowrap">{{ \Carbon\Carbon::parse($record->date)->format('d F Y') }}</td>
                        <td>
                            <a href="{{route('plant_operations.show', $record->id)}}" class="btn btn-sm btn-primary">View</a>
                        </td>
                        <td>
                            <a href="{{route('plant_operations.edit', $record->id)}}" class="btn btn-sm btn-secondary">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('plant_operations.destroy', $record->id)}}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="18">Record not found</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection


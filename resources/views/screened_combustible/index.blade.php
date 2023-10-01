@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Screen Combustible Materials</h1>
        <a href="{{ route('screen_combustible.create') }}" class="btn btn-primary">Add Record</a>
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
                    <th scope="col">#</th>
                    <th scope="col">Total SCM Received</th>
                    <th scope="col">Bail Created</th>
                    <th scope="col">Operation Hrs</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
        </thead>
        <tbody>
            @if($scms->count() > 0)
            @foreach($scms as $key => $scm)
                    <tr scope="row">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $scm->total_scm_received }}</td>
                        <td>{{ $scm->bail_created }}</td>
                        <td>{{ $scm->operation_hrs }}</td>
                        <td>{{ \Carbon\Carbon::parse($scm->date)->format('d F Y') }}</td>
                        <td>
                            <a href="{{ route('screen_combustible.show', $scm->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('screen_combustible.edit', $scm->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                            <form action="{{ route('screen_combustible.destroy', $scm->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Record not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection

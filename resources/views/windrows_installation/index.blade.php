@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Windrows Installation</h1>
        <a href="{{ route('windrows_installation.create') }}" class="btn btn-primary">Add Record</a>
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
                    <th scope="col">Windrow Code</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Installation Date</th>
                    <th scope="col">No Of Days</th>
                    <th scope="col">Compositions</th>
                    <th scope="col">No of Turnings</th>
                    <th scope="col">Status</th>
                    {{-- <th scope="col">Record_Created</th> --}}
                    <th scope="col">Actions</th>
                </tr>
        </thead>
        <tbody>
            @if($installations->count() > 0)
            @foreach($installations as $key => $installations)
                    <tr scope="row">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $installations->windrow_code }}</td>
                        <td>{{ $installations->weight }}</td>
                        <td>{{ \Carbon\Carbon::parse($installations->installation_date)->format('d F Y') }}</td>
                        <td>{{ $installations->no_of_days }}</td>
                        <td>{{ $installations->compositions }}</td>
                        <td>{{ $installations->no_of_turnings }}</td>
                        <td>{{ $installations->status }}</td>
                        {{-- <td>{{ \Carbon\Carbon::parse($installations->created_at)->format('h:i A') }}</td> --}}
                        <td>
                            <a href="{{ route('windrows_installation.show', $installations->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('windrows_installation.edit', $installations->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                            <form action="{{ route('windrows_installation.destroy', $installations->id) }}" method="POST" style="display: inline-block;">
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

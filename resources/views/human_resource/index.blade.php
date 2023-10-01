@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Human Resource</h1>
        <a href="{{ route('human_resource.create') }}" class="btn btn-primary">Add Record</a>
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
                    <th scope="col">Total Present Employee</th>
                    <th scope="col">Total Absent Employee</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
        </thead>
        <tbody>
            @if($humanResources->count() > 0)
            @foreach($humanResources as $key => $humanResource)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $humanResource->present_employees }}</td>
                        <td>{{ $humanResource->absent_employees }}</td>
                        <td>{{ \Carbon\Carbon::parse($humanResource->date)->format('d F Y') }}</td>
                        <td>
                            <a href="{{ route('human_resource.show', $humanResource->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('human_resource.edit', $humanResource->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                            <form action="{{ route('human_resource.destroy', $humanResource->id) }}" method="POST" style="display: inline-block;">
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

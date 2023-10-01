@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Waste Intakes</h1>
        <a href="{{ route('waste_intakes.create') }}" class="btn btn-primary">Add Record</a>
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
                    <th scope="col">MSW</th>
                    <th scope="col">Cow Dung</th>
                    <th scope="col">Egg Shell</th>
                    <th scope="col">Green Waste</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
        </thead>
        <tbody>
            @if($wasteIntakes->count() > 0)
            @foreach($wasteIntakes as $key => $wasteIntake)
                    <tr scope="row">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $wasteIntake->msw }}</td>
                        <td>{{ $wasteIntake->cow_dung }}</td>
                        <td>{{ $wasteIntake->egg_shell }}</td>
                        <td>{{ $wasteIntake->green_waste }}</td>
                        <td>{{ \Carbon\Carbon::parse($wasteIntake->date)->format('d F Y') }}</td>
                        <td>
                            <a href="{{ route('waste_intakes.show', $wasteIntake->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('waste_intakes.edit', $wasteIntake->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                            <form action="{{ route('waste_intakes.destroy', $wasteIntake->id) }}" method="POST" style="display: inline-block;">
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

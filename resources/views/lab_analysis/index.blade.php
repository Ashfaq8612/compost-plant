@extends('layouts.app')

@section('contents')

<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Lab Analysis</h1>
    <a href="{{ route('lab_analysis.create')}}" class="btn btn-primary">Add Record</a>
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
                <th scope="col">Windrows Code value</th>
                <th scope="col">Analysis Date</th>
                <th scope="col">Analysis Complete Date</th>
                <th scope="col">Compositions</th>
                <th scope="col">No of Days</th>
                <th scope="col">Avg Temp</th>
                <th scope="col">Moisture</th>
                <th scope="col">Organic Matter</th>
                <th scope="col">pH Value</th>
                <th scope="col">Elect Conductivity</th>
                <th scope="col">Total Dissolve Salt</th>
                <th scope="col">CEC</th>
                <th scope="col" colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($labAnalysis->count() > 0)
                @foreach($labAnalysis as $key => $record)
                    <tr scope="row">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $record->windrowsInstallation->windrow_code }}</td>
                        <td>{{ $record->analysis_date }}</td>
                        <td>{{ $record->analysis_complete_date }}</td>
                        <td>{{ $record->compositions }}</td>
                        <td>{{ $record->no_of_days }}</td>
                        <td>{{ $record->avg_temp }}°C</td>
                        <td>{{ $record->moisture }}%</td>
                        <td>{{ $record->organic_matter }}</td>
                        <td>{{ $record->ph_value }}</td>
                        <td>{{ $record->elect_conductivity }}</td>
                        <td>{{ $record->total_dissolve_salt }}</td>
                        <td>{{ $record->cec }}</td>
                        <td>
                            <a href="{{ route('lab_analysis.show', $record->id) }}" class="btn btn-sm btn-primary">View</a>
                        </td>
                        <td>
                            <a href="{{ route('lab_analysis.edit', $record->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('lab_analysis.destroy', $record->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="14">Record not found</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection

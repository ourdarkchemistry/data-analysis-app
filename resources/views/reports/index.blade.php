{{-- resources/views/reports/index.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reports</h1>

    <a href="{{ route('reports.generate') }}" class="btn btn-success mb-3">Generate New Report</a>

    <div class="card">
        <div class="card-header">
            Reports List
        </div>
        <div class="card-body">
            @if ($reports->isEmpty())
                <p>No reports available.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->id }}</td>
                                <td>{{ $report->title }}</td>
                                <td>{{ $report->created_at->format('Y-m-d H:i:s') }}</td>
                                <td>
                                    <a href="{{ route('reports.show', $report->id) }}" class="btn btn-info">View</a>
                                    <form action="{{ route('reports.destroy', $report->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection

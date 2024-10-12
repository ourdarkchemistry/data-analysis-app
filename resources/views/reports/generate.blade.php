{{-- resources/views/reports/generate.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Generate Report</h1>

    <form action="{{ route('reports.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Report Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Report Data</label>
            <textarea class="form-control" id="data" name="data" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Generate Report</button>
        <a href="{{ route('reports.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

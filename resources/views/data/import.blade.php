@extends('layouts.app')

@section('content')
    <h1>Import Data</h1>
    <form action="{{ route('data.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="data_file">Choose File (CSV, Excel):</label>
            <input type="file" name="data_file" id="data_file" class="form-control" required>
            @error('data_file')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mt-2">Import</button>
    </form>
@endsection

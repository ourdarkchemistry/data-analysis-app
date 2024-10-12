@extends('layouts.app')

@section('content')
    <h1>Data</h1>
    <a href="{{ route('data.import.form') }}" class="btn btn-primary">Import data</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Field 1</th>
                <th>Field 2</th>
                <th>Field 3</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataRecords as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->field1 }}</td>
                    <td>{{ $record->field2 }}</td>
                    <td>{{ $record->field3 }}</td>
                    <td>
                        <a href="{{ route('data.show', $record->id) }}" class="btn btn-info">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $dataRecords->links() }}
@endsection

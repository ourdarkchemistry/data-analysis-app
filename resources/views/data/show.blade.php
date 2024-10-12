{{-- resources/views/users/show.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>

    <div class="card">
        <div class="card-header">
            User Information
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{ $user->name }}</h5>
            <p class="card-text">Email: {{ $user->email }}</p>
            <p class="card-text">Created At: {{ $user->created_at->format('Y-m-d H:i:s') }}</p>
            <p class="card-text">Updated At: {{ $user->updated_at->format('Y-m-d H:i:s') }}</p>

            <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users List</a>
        </div>
    </div>
</div>
@endsection

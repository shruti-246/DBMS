@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Like Details</h1>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pet ID: {{ $like->PetID }}</h5>
                <p class="card-text"><strong>Type of Food:</strong> {{ $like->TypeofFood }}</p>
                <a href="{{ route('likes.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('likes.edit', $like->PetID) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('likes.destroy', $like->PetID) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection

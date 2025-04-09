@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Pet Details</h1>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $pet->Name }}</h5>
                <p class="card-text"><strong>Age:</strong> {{ $pet->Age }}</p>
                <p class="card-text"><strong>Street:</strong> {{ $pet->Street }}</p>
                <p class="card-text"><strong>City:</strong> {{ $pet->City }}</p>
                <p class="card-text"><strong>Zip Code:</strong> {{ $pet->ZipCode }}</p>
                <p class="card-text"><strong>State:</strong> {{ $pet->State }}</p>
                <p class="card-text"><strong>Type of Pet:</strong> {{ $pet->TypeofPet }}</p>
                <a href="{{ route('pets.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('pets.edit', $pet->PetID) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pets.destroy', $pet->PetID) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection

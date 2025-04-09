@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Food Details</h1>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $food->Name }}</h5>
                <p class="card-text"><strong>Brand:</strong> {{ $food->Brand }}</p>
                <p class="card-text"><strong>Type of Food:</strong> {{ $food->TypeofFood }}</p>
                <p class="card-text"><strong>Price:</strong> ${{ $food->Price }}</p>
                <p class="card-text"><strong>Item Weight:</strong> {{ $food->ItemWeight }} lbs</p>
                <p class="card-text"><strong>Class of Food:</strong> {{ $food->ClassofFood }}</p>
                <a href="{{ route('foods.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('foods.edit', $food->FoodID) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('foods.destroy', $food->FoodID) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection

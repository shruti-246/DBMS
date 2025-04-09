@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Add New Like</h1>
        
        <form action="{{ route('likes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="PetID">Pet ID</label>
                <input type="number" class="form-control" id="PetID" name="PetID" required>
            </div>
            <div class="form-group">
                <label for="TypeofFood">Type of Food</label>
                <input type="text" class="form-control" id="TypeofFood" name="TypeofFood" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('likes.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

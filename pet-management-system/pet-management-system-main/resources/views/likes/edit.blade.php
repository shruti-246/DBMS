@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Edit Like</h1>
        
        <form action="{{ route('likes.update', $like->PetID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="PetID">Pet ID</label>
                <input type="number" class="form-control" id="PetID" name="PetID" value="{{ $like->PetID }}" required>
            </div>
            <div class="form-group">
                <label for="TypeofFood">Type of Food</label>
                <input type="text" class="form-control" id="TypeofFood" name="TypeofFood" value="{{ $like->TypeofFood }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('likes.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

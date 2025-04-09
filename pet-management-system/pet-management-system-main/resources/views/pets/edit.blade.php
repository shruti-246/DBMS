@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Edit Pet</h1>
        
        <form action="{{ route('pets.update', $pet->PetID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" value="{{ $pet->Name }}" required>
            </div>
            <div class="form-group">
                <label for="Age">Age</label>
                <input type="number" class="form-control" id="Age" name="Age" value="{{ $pet->Age }}" required>
            </div>
            <div class="form-group">
                <label for="Street">Street</label>
                <input type="text" class="form-control" id="Street" name="Street" value="{{ $pet->Street }}" required>
            </div>
            <div class="form-group">
                <label for="City">City</label>
                <input type="text" class="form-control" id="City" name="City" value="{{ $pet->City }}" required>
            </div>
            <div class="form-group">
                <label for="ZipCode">Zip Code</label>
                <input type="text" class="form-control" id="ZipCode" name="ZipCode" value="{{ $pet->ZipCode }}" required>
            </div>
            <div class="form-group">
                <label for="State">State</label>
                <input type="text" class="form-control" id="State" name="State" value="{{ $pet->State }}" required>
            </div>
            <div class="form-group">
                <label for="TypeofPet">Type of Pet</label>
                <input type="text" class="form-control" id="TypeofPet" name="TypeofPet" value="{{ $pet->TypeofPet }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('pets.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

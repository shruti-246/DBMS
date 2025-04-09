@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Add New Pet</h1>
        
        <form action="{{ route('pets.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" required>
            </div>
            <div class="form-group">
                <label for="Age">Age</label>
                <input type="number" class="form-control" id="Age" name="Age" required>
            </div>
            <div class="form-group">
                <label for="Street">Street</label>
                <input type="text" class="form-control" id="Street" name="Street" required>
            </div>
            <div class="form-group">
                <label for="City">City</label>
                <input type="text" class="form-control" id="City" name="City" required>
            </div>
            <div class="form-group">
                <label for="ZipCode">Zip Code</label>
                <input type="text" class="form-control" id="ZipCode" name="ZipCode" required>
            </div>
            <div class="form-group">
                <label for="State">State</label>
                <input type="text" class="form-control" id="State" name="State" required>
            </div>
            <div class="form-group">
                <label for="TypeofPet">Type of Pet</label>
                <input type="text" class="form-control" id="TypeofPet" name="TypeofPet" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('pets.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

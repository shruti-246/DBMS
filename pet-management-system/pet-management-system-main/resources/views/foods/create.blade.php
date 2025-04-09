@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Add New Food</h1>
        
        <form action="{{ route('foods.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" required>
            </div>
            <div class="form-group">
                <label for="Brand">Brand</label>
                <input type="text" class="form-control" id="Brand" name="Brand" required>
            </div>
            <div class="form-group">
                <label for="TypeofFood">Type of Food</label>
                <input type="text" class="form-control" id="TypeofFood" name="TypeofFood" required>
            </div>
            <div class="form-group">
                <label for="Price">Price</label>
                <input type="number" class="form-control" id="Price" name="Price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="ItemWeight">Item Weight</label>
                <input type="number" class="form-control" id="ItemWeight" name="ItemWeight" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="ClassofFood">Class of Food</label>
                <input type="text" class="form-control" id="ClassofFood" name="ClassofFood" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('foods.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

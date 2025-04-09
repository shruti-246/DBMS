@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Edit Food</h1>
        
        <form action="{{ route('foods.update', $food->FoodID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" value="{{ $food->Name }}" required>
            </div>
            <div class="form-group">
                <label for="Brand">Brand</label>
                <input type="text" class="form-control" id="Brand" name="Brand" value="{{ $food->Brand }}" required>
            </div>
            <div class="form-group">
                <label for="TypeofFood">Type of Food</label>
                <input type="text" class="form-control" id="TypeofFood" name="TypeofFood" value="{{ $food->TypeofFood }}" required>
            </div>
            <div class="form-group">
                <label for="Price">Price</label>
                <input type="number" class="form-control" id="Price" name="Price" value="{{ $food->Price }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="ItemWeight">Item Weight</label>
                <input type="number" class="form-control" id="ItemWeight" name="ItemWeight" value="{{ $food->ItemWeight }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="ClassofFood">Class of Food</label>
                <input type="text" class="form-control" id="ClassofFood" name="ClassofFood" value="{{ $food->ClassofFood }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('foods.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Add New Purchase</h1>
        
        <form action="{{ route('purchases.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="OID">Owner ID</label>
                <input type="number" class="form-control" id="OID" name="OID" required>
            </div>
            <div class="form-group">
                <label for="FoodID">Food ID</label>
                <input type="number" class="form-control" id="FoodID" name="FoodID" required>
            </div>
            <div class="form-group">
                <label for="PetID">Pet ID</label>
                <input type="number" class="form-control" id="PetID" name="PetID" required>
            </div>
            <div class="form-group">
                <label for="Month">Month</label>
                <input type="text" class="form-control" id="Month" name="Month" required>
            </div>
            <div class="form-group">
                <label for="Year">Year</label>
                <input type="number" class="form-control" id="Year" name="Year" required>
            </div>
            <div class="form-group">
                <label for="Quantity">Quantity</label>
                <input type="number" class="form-control" id="Quantity" name="Quantity" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('purchases.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection

@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Purchase Details</h1>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Owner ID: {{ $purchase->OID }}</h5>
                <p class="card-text"><strong>Food ID:</strong> {{ $purchase->FoodID }}</p>
                <p class="card-text"><strong>Pet ID:</strong> {{ $purchase->PetID }}</p>
                <p class="card-text"><strong>Month:</strong> {{ $purchase->Month }}</p>
                <p class="card-text"><strong>Year:</strong> {{ $purchase->Year }}</p>
                <p class="card-text"><strong>Quantity:</strong> {{ $purchase->Quantity }}</p>
                <a href="{{ route('purchases.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('purchases.edit', [$purchase->OID, $purchase->FoodID, $purchase->PetID]) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('purchases.destroy', [$purchase->OID, $purchase->FoodID, $purchase->PetID]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection

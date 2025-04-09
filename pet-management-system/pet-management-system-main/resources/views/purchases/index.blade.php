@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Purchases List</h1>
        <a href="{{ route('purchases.create') }}" class="btn btn-primary mb-3">Add New Purchase</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Owner ID</th>
                    <th>Food ID</th>
                    <th>Pet ID</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($purchases as $purchase)
                    <tr>
                        <td>{{ $purchase->OID }}</td>
                        <td>{{ $purchase->FoodID }}</td>
                        <td>{{ $purchase->PetID }}</td>
                        <td>{{ $purchase->Month }}</td>
                        <td>{{ $purchase->Year }}</td>
                        <td>{{ $purchase->Quantity }}</td>
                        <td>
                            <a href="{{ route('purchases.show', [$purchase->OID, $purchase->FoodID, $purchase->PetID]) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('purchases.edit', [$purchase->OID, $purchase->FoodID, $purchase->PetID]) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('purchases.destroy', [$purchase->OID, $purchase->FoodID, $purchase->PetID]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

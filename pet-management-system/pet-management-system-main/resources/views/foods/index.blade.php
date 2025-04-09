@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Foods List</h1>
        <a href="{{ route('foods.create') }}" class="btn btn-primary mb-3">Add New Food</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Food ID</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Type of Food</th>
                    <th>Price</th>
                    <th>Item Weight</th>
                    <th>Class of Food</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($foods as $food)
                    <tr>
                        <td>{{ $food->FoodID }}</td>
                        <td>{{ $food->Name }}</td>
                        <td>{{ $food->Brand }}</td>
                        <td>{{ $food->TypeofFood }}</td>
                        <td>{{ $food->Price }}</td>
                        <td>{{ $food->ItemWeight }}</td>
                        <td>{{ $food->ClassofFood }}</td>
                        <td>
                            <a href="{{ route('foods.show', $food->FoodID) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('foods.edit', $food->FoodID) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('foods.destroy', $food->FoodID) }}" method="POST" style="display:inline;">
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

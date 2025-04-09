@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Likes List</h1>
        <a href="{{ route('likes.create') }}" class="btn btn-primary mb-3">Add New Like</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Pet ID</th>
                    <th>Type of Food</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($likes as $like)
                    <tr>
                        <td>{{ $like->PetID }}</td>
                        <td>{{ $like->TypeofFood }}</td>
                        <td>
                            <a href="{{ route('likes.show', $like->PetID) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('likes.edit', $like->PetID) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('likes.destroy', $like->PetID) }}" method="POST" style="display:inline;">
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

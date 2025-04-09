@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <h1>Pets List</h1>
        <a href="{{ route('pets.create') }}" class="btn btn-primary mb-3">Add New Pet</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Pet ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>State</th>
                    <th>Type of Pet</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                    <tr>
                        <td>{{ $pet->PetID }}</td>
                        <td>{{ $pet->Name }}</td>
                        <td>{{ $pet->Age }}</td>
                        <td>{{ $pet->Street }}</td>
                        <td>{{ $pet->City }}</td>
                        <td>{{ $pet->ZipCode }}</td>
                        <td>{{ $pet->State }}</td>
                        <td>{{ $pet->TypeofPet }}</td>
                        <td>
                            <a href="{{ route('pets.show', $pet->PetID) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('pets.edit', $pet->PetID) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pets.destroy', $pet->PetID) }}" method="POST" style="display:inline;">
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

@extends('layout') <!-- Extend the layout -->

@section('title', 'Add New Item') <!-- Set the page title -->

@section('content')
    {{-- Displaying an error of validation if any --}}
    <div class="container">
        <h2>Add Menu-Items</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $errors)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    </div>
    @endif

    {{-- form html --}}
    <form action="store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" step="1" required>
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" name="image">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Add New Item</button>

    </form>
@endsection

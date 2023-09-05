@extends('layout')

@section('title', 'Edit-Menu')

@section('content')

    <body>
        {{-- Displaying an error of validation if any --}}
        <div class="container">

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

        <h2>Edit & Update Menu</h2>
        {{-- form html --}}
        <form action="{{ route('updatemenu', ['id' => $editmenu->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $editmenu->name }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $editmenu->price }}"
                    step="1" required>
            </div> <br>
            <button type="submit" class="btn btn-success btn-lg">Update Menu</button>
        </form>
    </body>
@endsection

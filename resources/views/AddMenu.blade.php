@extends('layout')

@section('title', 'Add-Menu')

@section('content')
<body>
    {{-- Displaying an error of validation if any --}}
        <div class="container">
            <h2>Add Menu</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $errors)
                    <li>{{$error}}</li>  
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    
        {{-- form html --}}
        <form action="{{route('addmenu')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class = "form-control" name="name" required>    
            </div>
    
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" step="1" required>
            </div> <br>
            <button type="submit" class="btn btn-primary">Add Menu</button>

        </form>
    </body>
@endsection

@extends('layout')
@section('title', 'Edit-Menu_Items')

@section('content')
<body>
    
{{-- Displaying an error of validation if any --}}
    <div class="container">
        <h2>Update Menu-Items</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                <li>{{$errors}}</li>  
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    {{-- form html --}}
    <form action="{{route('updateitem', $menuItem->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class = "form-control" name="name" value="{{$menuItem->name}}">    
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" step="1" value="{{$menuItem->price}}">
        </div> 

        <div class="form-group">
            <label for="image">Image:</label>
            @if($menuItem->image)
            <img src="{{ asset('/images/menu-items/' . $menuItem->image) . '?v=' . time() }}" alt="{{$menuItem->name}}" height="100px" width="100px">
            @else
            No Image
            @endif

            <input type="file" class="form-control"  name="image">
        </div> 
        <br>
        <button type="submit" class="btn btn-primary">Update Item</button>

    </form>
</body>
@endsection
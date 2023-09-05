@extends('layout')
@section('title', 'Menu')
@section('content')
<body>
  <h3><center>Welcome To The Menu Page</center></h3>

<a href="{{url('addform')}}" class="btn btn-success btn-lg">Add Menu</a><br>
<br>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($addMenu as $menu)
    <tr>
      <td>{{$menu->id}}</td>
      <td>{{$menu->name}}</td>
      <td>{{$menu->price}}</td>
      <td>
        <a href={{"editmenu/". $menu->id}} class="btn btn-warning btn-lg">Edit</a>
        <a href={{"deletemenu/". $menu->id}} class="btn btn-danger btn-lg">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<br>
{{-- CHoose menu Seciton --}}
<div class="container mt-4">
  <div class="row">
      <div class="col-md-6 offset-md-3">
          <h4 class="mb-3">Choose the Menu</h4>
          <select class="form-select mb-3">
              <option value="breakfast">Breakfast</option>
              <option value="dinner">Dinner</option>
          </select>
          <a href="" class="btn btn-primary btn-lg mb-2">Order Now</a>
        
      </div>
  </div>
</div>
  
</body>
@endsection



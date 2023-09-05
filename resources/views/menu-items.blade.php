@extends('layout')

@section('title', 'Menu-items')

@section('content')
    <body>
        <h3>
            <center>Menu Items</center>
        </h3>
        <a href="{{ route('additem') }}" class="btn btn-success btn-lg">Add New Items</a><br>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($addMenuItem as $menuItem)
                    <tr class="shadow-lg">
                        <td class="align-middle">{{ $menuItem->id }}</td>
                        <td class="align-middle">{{ $menuItem->name }}</td>
                        <td class="align-middle">{{ $menuItem->price }}</td>
                        <td class="align-middle">
                            @if ($menuItem->image)
                                <img src="{{ asset($menuItem->image) }}" alt="{{ $menuItem->name }}" height="100px"
                                    width="100px">
                            @else
                                No image
                            @endif

                        </td>
                        <td class="align-middle">
                            <a href="{{ route('edititem', $menuItem->id) }}" class="btn btn-warning btn-lg">Edit</a>
                            <a href="{{ route('deleteitem', $menuItem->id) }}" class="btn btn-danger btn-lg">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>

        <!-- Custom CSS code for menu-items page -->
        <style>
            h3 {
                text-align: center;
            }

            .btn {
                display: inline-block;
                margin-bottom: 10px;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: bold;
            }

            .btn-primary {
                background-color: #007bff;
                color: #fff;
            }

            .btn-success {
                background-color: #28a745;
                color: #fff;
            }

            .table-hover tbody tr:hover {
                background-color: #f5f5f5;
            }

            .shadow-lg {
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
            }

        </style>

    </body>
@endsection

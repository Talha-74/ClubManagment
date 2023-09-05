@extends('layout')
@section('title', 'Order-Form')
@section('content')
<body>
    <div class="container m-5">
        <h3>
            <center>Place Your Order</center>
        </h3>
        <form action="{{ route('store_data') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="order_number">Order No.</label>
                <input type="text" class="form-control" id="order_number" aria-describedby="emailHelp"
                    name="order_number" value="{{ $orderNumber }}" readonly>
            </div>

            <div class="form-group">
                <label for="menu_type">Menu Type</label>
                <select class="form-control" id="menu_type" name="menu_type">
                    @foreach ($menuTypes as $menuType)
                    <option value="{{ $menuType->name }}">{{ $menuType->name }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input type="text" class="form-control" id="customer_name" placeholder="customer_name"
                    name="customer_name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" placeholder="Phone" name="phone">
            </div>

            <div class="form-group">
                <label for="num_of_persons">Number of persons</label>
                <input type="number" class="form-control" id="num_of_persons" placeholder="Number of persons"
                    name="num_of_persons" min="1">
            </div>

            {{-- Menu Items --}}
            <br>
            <div class="form-group">
                <label>Choose Menu Items:</label>
                @foreach ($menuItems as $menuItem)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="menu_item" id="menu_item"
                            value="{{ $menuItem->id }}">
                        <label class="form-check-label" for="menu_item">
                            {{ $menuItem->name }}
                        </label>
                    </div>
                @endforeach
            </div>

            <br>
            <div class="form-group">
                <label for="arriving_time">Arriving Time</label>
                <input type="time" class="form-control" id="arriving_time" placeholder="Arriving Time"
                    name="arriving_time">
            </div>

            <div class="form-group">
                <label for="leaving_time">Leaving Time</label>
                <input type="time" class="form-control" id="leaving_time" placeholder="Leaving time"
                    name="leaving_time">
            </div>

            <div class="form-group">
                <label for="order_date">Order date</label>
                <input type="date" class="form-control" id="order_date" placeholder="Oder date"
                    name="order_date">
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </form>
    </div>
</body>   
@endsection
    



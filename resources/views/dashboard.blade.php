@extends('layout')

@section('title', 'dashboard')

@section('content')

    <body>
        {{-- <h1 class="text-center">Welcome</h1>
        <h2 class="text-center">To The</h2>
        <h1 class="text-center">New York Elite Club Management System</h1> --}}

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg rounded-lg mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Dashboard</h2>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card bg-primary text-white shadow">
                                    <div class="card-body">
                                        <h5>Total Number of Orders for all time:</h5>
                                        <h3>{{ $totalOrders }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card bg-success text-white shadow">
                                    <div class="card-body">
                                        <h5>Number of Orders received today:</h5>
                                        <h3>{{ $ordersReceivedToday }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card bg-warning text-white shadow">
                                    <div class="card-body">
                                        <h5>Total orders of breakfast:</h5>
                                        <h3>{{ $totalBreakfastOrders }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card bg-info text-white shadow">
                                    <div class="card-body">
                                        <h5>Total orders of dinner:</h5>
                                        <h3>{{ $totalDinnerOrders }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card bg-danger text-white shadow">
                                    <div class="card-body">
                                        <h5>Total orders of breakfast Received Today:</h5>
                                        <h3>{{ $todayBreakfastOrders }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card bg-secondary text-white shadow">
                                    <div class="card-body">
                                        <h5>Total orders of dinner Received Today:</h5>
                                        <h3>{{ $todayDinnerOrders }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card bg-dark text-white shadow">
                                    <div class="card-body">
                                        <h5>Total Earning:</h5>
                                        <h3>{{ $totalEarnings }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card bg-light text-dark shadow">
                                    <div class="card-body">
                                        <h5>Today's total Earning:</h5>
                                        <h3>{{ $todaysEarnings }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CSS styles -->
        <style>
            body {
                background-color: #f8f9fa;
                font-family: 'Open Sans', sans-serif;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: 'Montserrat', sans-serif;
                font-weight: bold;
                text-transform: capitalize;
            }

            .card {
                border-radius: 20px;
                overflow: hidden;
                transition: all 0.2s ease-in-out;
            }

            .card:hover {
                transform: translateY(-10px);
            }

            .btn {
                border-radius: 20px;
                font-weight: bold;
                text-transform: uppercase;
            }
        </style>

    </body>

@endsection

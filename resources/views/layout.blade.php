<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
/* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Apply styles to the entire body */
body {
    font-family: 'Nunito Sans', Arial, sans-serif;
    background-color: #f5f5f5;
}

/* Header Styles */
header {
    background-color: #800080; /* Dark Purple */
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    padding: 25px 30px; 
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

header .header-left {
    font-size: 10px;
    font-weight: normal;
    font-family: 'Pacifico', cursive;
}



.header-right {
    display: flex;
    align-items: center;
    
}

nav ul {
    list-style: none;
    display: flex;
}

nav ul li {
    margin-right: 40px;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 20px;
    font-family: 'Nunito Sans', Arial, Helvetica, sans-serif;
    letter-spacing: 0.1em;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #ffcc00; /* Yellow */
}

.order-button {
    background-color: #ffcc00; /* Yellow */
    color: black;
    border: none;
    padding: 10px 20px;
    margin-left: 20px;
    border-radius: 5px;
    font-weight: bold;
    margin-bottom: 20px;
    cursor: pointer;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2); 
}


.order-button a {
    color: black;
    text-decoration: none;
}

.order-button:hover {
    background-color: #ffdb4d; /* Lighter Yellow */
}

/* Container Styles */
.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 30px auto 0; /* Add margin at the top to separate from the footer */
    width: 80%; /* You can adjust the width as needed */
}

/* Footer Styles */
footer {
    background-color: black;
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: 60px;
    bottom: 0;
    left: 0;
    right: 0; 
    width: 100%; 
}

.footer-text {
    font-size: 14px;
}

/* .footer-text::after{
   content:'Made with ❤️';  
} */
</style>
</head>
<body>
<header>
        
            
    <div class="header-left" style="font-size: 35px !important; font-family: 'Arial', sans-serif !important; letter-spacing: 0.05em !important; font-weight: normal !important;">
        <p>New York Elite Club</p>
    </div>
            
            
        </div>
        <div class="header-right">
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ url('menu') }}">Menu</a></li>
                    <li><a href="{{url('menuitems')}}">Menu-Items</a></li>
                </ul>
            </nav>
            <button class="order-button"><a href="{{route('order_form')}}">Order Now</a></button>
        </div>
</header>

<div class="container">
        <!-- Content Section -->
        @yield('content')   
</div>

<footer>
        <p class="footer-text">&copy; 2023 Elite Club Management System. All rights reserved. Made with ❤️ by <a href="https://www.linkedin.com/in/talha-khan74/">Talha Khan</a></p>
</footer>

</body>
</html>

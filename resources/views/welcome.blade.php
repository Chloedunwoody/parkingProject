<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ParkThatCar</title>
    <link href="{{asset('images/favicon.png')}}" type="image/ico" rel="icon">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

</head>

<body>

<header>
    <div class="jumbotron">
        <h1 class="text-danger text-center">Park That Car</h1>
    </div>
</header>

<nav class= "p-2">
    <ul class="nav nav-pills p-4">
        <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('register') }}">Register</a></li>
    </ul>
</nav>

<main class= "p-2">
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-6">
            <dl>
                <dt class="text-danger">About Us</dt>
                <dd class="text-secondary">If you are like every Montreal-er, you know the struggle of trying to find parking. IT leads to many wasted minutes in the car and lots of frustration. We are here to help
                    aid in the process of finding parking much easier.</dd>
                <dt class="text-danger">How it Works</dt>
                <dd class="text-secondary">Register for an account with us and we will give you a real time view on the available parking spots in a 2km radius. IT is important to do your part and advise the app when you are planning to leave the
                    space to allow for other drivers to see if your space is soon to be available.</dd>

            </dl>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-none">
            <img class="d-sm-none d-md-inline d-lg-inline float-left rounded-circle"src="{{asset('images/signsparking.jpg')}}" alt="Parking Signs">
            <!-- Image downloaded from https://montrealgazette.com/news/local-news/montreal-unveils-new-app-to-track-parking-spots-downtown -->
        </div>
    </div>
</div>
</main>

<div class="row">
    <div class="col-12">
        <footer class=" p-2 text-center">
            Copyright &copy; 2021 Parking Hero
        </footer>
    </div>
</div>
</body>
</html>

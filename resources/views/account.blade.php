<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account</title>
    <link href="{{asset('images/favicon.png')}}" type="image/ico" rel="icon">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

</head>

<body>

<header>
    <div class="jumbotron">
        <h1 class="text-danger text-center">Your Account</h1>
    </div>
</header>

<nav class= "p-2">
    <ul class="nav nav-pills p-4">
        <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('findParking') }}">Find Parking</a></li>
    </ul>
</nav>

<main class= "p-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <dl>
                    <dt class="text-danger">Name</dt>
                    <dd class="text-secondary">Hello there!</dd>
                    <dt class="text-danger">Account Details</dt>
                    <dd class="text-secondary">You have logged into your account here is where verything is stored</dd>

                </dl>
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

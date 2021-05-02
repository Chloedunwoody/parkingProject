<!DOCTYPE html>
<html>

<head>
    <title>Parking Hero Registration</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
<br /><br />
<div class="container" style="width:500px;">
    <nav class= "p-2">
        <ul class="nav nav-pills p-4">
            <li class="nav-item"><a class="nav-link " href="{{ url('/') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link " href="{{ url('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link active" href="{{ url('register') }}">Register</a></li>
        </ul>
    </nav>
    <h3 align="center">Parking Registration Form</h3>
    <br />
    <h3 align="center">Register</h3>
    <br />
    <form method="POST" action="{{ action('HomeController@register') }}">
        <label>Enter Username</label>
        <input type="text" name="username" class="form-control" required/>
        <br />
        <label>Enter Password</label>
        <input type="password" name="password" class="form-control" required/>
        <br />
        <input type="text" placeholder="First Name" name="firstName" class="form-control" />
        <br />
        <input type="text" placeholder="Last Name" name="lastName" class="form-control" />
        <br />
        <input type="email" placeholder="Email" name="email" class="form-control" />
        <br />
        <input type="submit" name="register" value="Sign Up" class="btn btn-info" />
        <br />
    </form>
</div>

</body>

</html>

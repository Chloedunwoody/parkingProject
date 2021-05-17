
<!DOCTYPE html>
<html>

<head>
    <title>Find Parking</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
        <li class="nav-item"><a class="nav-link" href="{{ url('account') }}">Account</a></li>
    </ul>
</nav>
<main class= "p-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <dl>
                    <dt class="text-danger">Find Parking</dt>
                </dl>
            </div>
        </div>
    </div>



    <button onclick="getLocation()">Find Parking</button>
    <p id="demo"></p>
    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=45.5573504%20,-73.6002048&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">map iframe</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
</main>

<div class="row">
    <div class="col-12">
        <footer class=" p-2 text-center">
            Copyright &copy; 2021 Parking Hero
        </footer>
    </div>
</div>
<script>
    var x = document.getElementById("demo");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }
</script>
</body>
</html>

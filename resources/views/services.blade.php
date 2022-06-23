<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Services</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/services.css') }}">
</head>
<body>   
	<nav class="navbar navbar-expand-lg navbar-dark mb-5">
        <div class="container-fluid">
            <div class="navbar-brand">
                    <img src="./images/bus.png" class="rounded-circle spe" alt="" width="30" height="24">
                </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactus">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex mx-2">
                    <a class="text-light mx-4 group-a" href="/loginpage">Login/Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="./images/anytime.jpg" alt="">
                <h3>Anytime Ticket Purchase</h3>
                <div class="text-center mb5">Customer can easily book their ticket and make the payment</div>
            </div>
            <div class="col-md-6">
                <img src="./images/cancellation.jpg" alt="">
                <h3>Easy Cancellation</h3>
                <div class="text-center mb5">Customer can easily cancel their ticket and get the payment</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="./images/showbooking.png" alt="">
                <h3>Show Booking</h3>
                <div class="text-center mb5">Customer can easily see their all tickets,they have booked</div>
            </div>
            <div class="col-md-6">
                <img src="./images/secure.jpg" alt="">
                <h3>Secured Payment</h3>
                <div class="text-center mb5">We support online payment.Security is our main concern</div>
            </div>
        </div> 
    </div>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
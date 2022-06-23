<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title> 
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/aboutus.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="navbar-brand">
                <img src="./images/bus.png" class="rounded-circle" alt="" width="30" height="24">
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
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/aboutus">About Us</a>
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
    <h1 id="first">About Us</h1>
    <div class="container">
            <h2 class="title">Our Services...</h2>
            <ul>
                <li>
                    <p>
                        From this website, you can search the buses according to your convenient.
                        Additionally, you will be able to register a bus ticket according to your choice !!!
                        Our buses are full with grand facilities with AC, very comfortable seats, extra space for your
                        important luggage and also TV in our buses to make your journey with full of entertainment !
                        Under any unexpected circumstances, you can also cancel your tickets and get full refund !
                    </p>
                </li>
                <li>
                    <p>
                        We are providing helpfull and disiplined members at each busport they are ready to guide you any
                        time.
                    </p>
                </li>
                <li>
                    <p>
                        In case of any query,
                        Please feel free to contact us even you can talk with us on our Toll-free no...
                    </p>
                </li>
            </ul>
      </div>
      <div class="container">
        <h2 class="title">What makes us different...</h2>
        <div class="row">
            <div class="col-md-4">
            <figure class="figure fig1">
                <img src="./images/safety.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Your safety is our priority</figcaption>
            </figure>
            </div>
            <div class="col-md-4">
            <figure class="figure fig2">
                <img src="./images/clock.png" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Fast journey</figcaption>
              </figure>
            </div>
            <div class="col-md-4">
            <figure class="figure fig3">
                <img src="./images/customercare.jfif" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">We are ready to help</figcaption>
            </figure>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>
</html
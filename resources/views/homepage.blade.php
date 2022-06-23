<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/homepage.css') }}">
</head> 
<body>
    <div class="image">
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
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/aboutus">About Us</a>
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
        <div class="container-fluid margin-top">
            <div class="row">
                <div class="col-md-6 mt-5 min">
                    <pre class="quotes">Want To Book Ticket?
You Are At The Right Place !!
                </pre> 
                </div>
                <div class="col-md-6">
                    <form action="/showbus" method="POST" class="form-group m-lg-5">
                        @csrf
                        <label for="source">Source</label>
                        <select class="form-select mb-3" id="source" name="source" aria-label="Default select example" required>
                            <option selected value="bhuj">Bhuj</option>
                            <option value="ahemadabad">Ahemadabad</option>
                            <option value="vadodara">Vadodara</option>
                            <option value="anand">Anand</option>
                        </select> 
                        <label for="dest">Destination</label>
                        <select class="form-select mb-3" id="dest" name="dest" aria-label="Default select example" required>
                            <option value="bhuj">Bhuj</option>
                            <option selected value="ahemadabad">Ahemadabad</option>
                            <option value="vadodara">Vadodara</option>
                            <option value="anand">Anand</option>
                        </select>
                        <span class="form-text invalid-feedback">Source and destination can't be same</span> 
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date" class="form-control mb-3" required>
                        <input type="submit" id="search" name="submit" value="Search" class="form-control mt-3 mb-3 btn btn-red">
                    </form>
                </div>
            </div>
        </div>
        <div style="height: 66px;"></div>
    </div>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('/js/homepage.js') }}"></script>
</body>
</html>
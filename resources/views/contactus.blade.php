<!DOCTYPE html>
<html lang="en"> 
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/contactus.css') }}">
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
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contactus">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex mx-2">
                    <a class="text-light mx-4 group-a" href="/loginpage">Login/Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @if($fill)
            @if($res)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Submitted!</strong>&nbsp;We will try to resolve it soon.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @else
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops!</strong>&nbsp;Something went wrong.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>   
            @endif
        @endif 
    </div>
	<div class="container">
        <h1 align=center id="touch"> GET IN TOUCH </h1>
        <div class="row mt6">
            <div class="col-md-6">
                <div class="cont">
                <div class="ico fa fa-bullhorn highlight"><img src="./images/address.png" width="10%"></div>
                    <div>
                            <div class="text">
                                Vadodara , Near Central Bus Depot , Aurobindo Ghosh Rd
                            </div>
                    </div>
                </div>
                <div class="cont">
                <div class="ico fa fa-bullhorn highlight"><img src="./images/phone.png" width="10%"></div>
                    <div>
                            <div class="text">
                                +91-8780987359
                            </div>
                    </div>
                </div>
                <div class="cont">
                <div class="ico fa fa-bullhorn highlight"><img src="./images/email.png" width="10%"></div>
                    <div>
                            <div class="text">
                                kushayvhora@gmail.com
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="submitquery" method="POST" class="form-group">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="abc@gmail.com" required>
                                <span class="form-text invalid-feedback">Please enter valid email</span> 
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="query" id="message" class="form-control" placeholder="Write your query here..." rows="3" required></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-red" id="check" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('/js/contactus.js') }}"></script>
</body>
</html>
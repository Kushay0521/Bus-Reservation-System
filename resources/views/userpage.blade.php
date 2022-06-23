<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userpage</title>
    <link rel="stylesheet" href="{{ asset('/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/userpage.css') }}">
</head>

<body>

    <div class="image">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <i class="fa fa-user-o" aria-hidden="true" id="showprofile"></i>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item special">
                            <a class="nav-link active" aria-current="page" href="/userpage">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/showbooking">My Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cancellation">Cancellation</a>
                        </li>
                    </ul>
                    <div class="d-flex mx-2">
                        <a class="text-light mx-4 group-a " href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </nav>  
    @if($change)
        @if($res==1)
            <div class="alert alert-success alert-dismissible fade show passalert" role="alert">
            <strong>Changed!</strong> Password changed successfully !!.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @php $res=false; @endphp
        @elseif($res==0)
            <div class="alert alert-danger alert-dismissible fade show passalert" role="alert">
            <strong>Cant Change!</strong> Your old password is wrong.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @else
            <div class="alert alert-danger alert-dismissible fade show passalert" role="alert">
            <strong>Cant Change!</strong> Something went wrong.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @php $change=false; @endphp
    @endif
        <div class="container-fluid margin-top">
            <div class="row">
                <div class="col-md-6 mt-5 min">
                    <pre class="quotes">Hello {{session('name')}},
Welcome back to your account !!
                </pre>
                </div>
                <div class="col-md-6">
                    <form action="/showbus" method="POST" class="form-group m-lg-5">
                        @csrf
                        <label for="source">Source</label>
                        <select class="form-select mb-3 place" id="source" name="source" aria-label="Default select example" required>
                            <option selected value="bhuj">Bhuj</option>
                            <option value="ahemadabad">Ahemadabad</option>
                            <option value="vadodara">Vadodara</option>
                            <option value="anand">Anand</option>
                        </select>
                        <label for="dest">Destination</label>
                        <select class="form-select mb-3 place" id="dest" name="dest" aria-label="Default select example" required>
                            <option value="bhuj">Bhuj</option>
                            <option selected value="ahemadabad">Ahemadabad</option>
                            <option value="vadodara">Vadodara</option>
                            <option value="anand">Anand</option>
                        </select>
                        <span class="form-text invalid-feedback">Source and destination can't be same</span>
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date" class="form-control mb-3" required>
                        <input type="submit" id="search" name="submit" value="Search & Book" class="form-control mt-3 mb-3 btn btn-red">
                    </form>
                </div>
            </div>
        </div>
        <div style="height: 66px;"></div>
    </div>
    
    <div class="col-md-3 d-none" id="profile">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Username:&nbsp;{{session('uname')}}</li>
            <li class="list-group-item">Email:&nbsp;{{session('email')}}</li>
            <li class="list-group-item"><a class="group-a" data-bs-toggle="modal" data-bs-target="#exampleModal">Change Password</a></li>
        </ul>
    </div>
<div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/change" method="POST">
      @csrf
      <div class="modal-body">
        <div class="mb-3">
                            <label for="opassword" class="form-label">Old Password</label>
                                <input type="password" class="form-control" id="opassword" name="opassword" placeholder="Enter Your Old Password" required>
                            </div>
      <div class="mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" required>
                                <span class="form-text invalid-feedback">Password must contain at least one digit,special character and must start and end with alphanumberic</span>
                            </div>
      <div class="mb-3">
                                <label for="cpassword" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="cpassword" placeholder="Re-enter Your Password" required>
                                <span class="form-text invalid-feedback">Passwords are not matching</span>
                            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-red" id="change">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('/js/userpage.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showbookings</title>
    <link rel="stylesheet" href="{{ asset('/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/showbookings.css') }}">
</head>
<body>
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
                            <a class="nav-link" href="/userpage">Home</a>
                        </li>
                        <li class="nav-item">  
                            <a class="nav-link active" aria-current="page"  href="/showbooking">My Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cancellation">Cancellation</a>
                        </li>
                    </ul>
                    <div class="d-flex mx-2">
                        <a class="text-light mx-4 group-a" href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </nav>  
    <div class="container mt-5" >
        <div class="row py-3 mb-5 heading">
                <div class="row text-white">
                <div class="text-center"><b>Total Bookings: {{$num}}</b> </div>
                </div>
        </div>
        @foreach($bookings as $booking)
                <div class="row g-0 border border-3 shadow my-5 p-3">
                <div class="col-6 p-0 responsive">
                <table class="table table-borderless text-capitalize m-0">
              <tbody class="text-nowrap">
                <tr>
                  <th class="col-6">Source :</th>
                  <td class="col-6">{{$booking['source']}}</td>
                </tr>
                <tr>
                  <th class="col-6">Destination :</th>
                  <td class="col-6">{{$booking['destination']}}</td>
                </tr>
                <tr>
                  <th class="col-6">Departure :</th>
                  <td class="col-6">{{$booking['departure']}}</td>
                </tr>
                <tr>
                  <th class="col-6">Arrival :</th>
                  <td class="col-6">{{$booking['arrival']}}</td>
                </tr>
              </tbody>
            </table>
                </div>
                <div class="col-6 p-0 responsive">
                    <table class="table table-borderless text-capitalize m-0">
              <tbody class="text-nowrap">
                <tr>
                  <th class="col-6">Total seats</th>
                  <td class="col-6">{{$booking['seats']}}</td>
                </tr>
                <tr>
                  <th class="col-6">Bus type :</th>
                  <td class="col-6 text-uppercase">{{$booking['type']}}</td>
                </tr>
                <tr>
                  <th class="col-6">Fare :</th>
                  <td class="col-6">{{$booking['total_fare']}}</td>
                </tr>
                <tr>
                  <th class="col-6">Date :</th>
                  <td class="col-6">{{$booking['date']}}</td>
                </tr>
              </tbody>
            </table></div></div>
        @endforeach
    </div>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
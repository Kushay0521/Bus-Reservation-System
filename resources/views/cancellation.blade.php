<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelticket</title>
    <link rel="stylesheet" href="{{ asset('/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/cancellation.css') }}">
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
                            <a class="nav-link" href="/showbooking">My Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  href="/cancellation">Cancellation</a>
                        </li>
                    </ul>
                    <div class="d-flex mx-2">
                        <a class="text-light mx-4 group-a" href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </nav> 
            @if($cancel || ($goaction && !$ticket))
              @if(!$ticket && !$cancel)
                <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                <strong>Oops!</strong> No data found,try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @elseif($cancelled)
                <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                <strong>Cancelled!</strong> Ticket cancelled successfully !!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @php $cancelled=false; @endphp
              @else
                <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                <strong>Oops!</strong> Something went wrong.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
            @endif
     @if(!$goaction && !$cancel)
        <div class="container mt-5">
            <form action="/go" method="POST">
            @csrf
            <div class="row mx-auto">
                    <div class="col-4 text-capitalize text-end text-nowrap">
                        <label for="ticketid" class="form-label mt-2"><b>Ticket no:</b></label>
                    </div>
                    <div class="col-4">   
                        <input type="text" class="form-control " id="ticketid" name="ticketid">
                    </div>
                    <div class="col-2 up">
                        <button class="btn btn-red">Go</button>
                    </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-2 down">
                <button class="btn btn-red">Go</button>
            </div>
            </div>
            </form>
        </div>
        @php $cancel=false; @endphp
    @endif
    @if($goaction && !$cancelled && $ticket)
    <div class="container mt-5">
    <div class="row">
    <div class="display-4 mb-2">Your Ticket</div>
    <hr  size="5px">
    </div>
    <div class="row">
    <div class="col-md-6">
    <table class="table table-borderless  text-capitalize">
    <tbody class="text-nowrap">
    <tr>
      <th scope="row">Ticket number :</th>
      <td class="">{{$ticket['ticket_id']}}</td>
    </tr>
    <tr>
      <th scope="row">Passanger name :</th>
      <td class="">{{session('name')}}</td>
    </tr>
    <tr>
      <th scope="row">Mobile no :</th>
      <td>{{session('mobile')}}</td>
    </tr>
    <tr>
      <th scope="row">From :</th>
      <td>{{$ticket['source']}}</td>
    </tr>
    <tr>
      <th scope="row">To :</th>
      <td>{{$ticket['destination']}}</td>
    </tr>
    <tr>
      <th scope="row">Bus no :</th>
      <td>{{$ticket['bus_id']}}</td>
    </tr>
    <tr>
      <th scope="row">Total seats :</th>
      <td>{{$ticket['seats']}}</td>
    </tr>
    <tr>
      <th scope="row">Date :</th>
      <td>{{$ticket['date']}}</td>
    </tr>
    <tr>
      <th scope="row">Time :</th>
      <td>{{$ticket['departure']}}</td>
    </tr>  
    <tr>
      <th scope="row">Total fare :</th>
      <td>{{$ticket['total_fare']}} Rs.</td>
    </tr>
    <tr>
      <th scope="row">Ticket issued time :</th>
      <td>{{$ticket['bookingdate']}}</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
<div class="container my-3">
<div class="row">
    <div class="col-sm-2 mx-2 mb-3">   
    <a href="/cancel" class="btn btn-red" id="cancel">Cancel</a>
    </div>
</div>
</div>
    @endif
<script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('/js/cancellation.js') }}"></script>
</body>
</html>
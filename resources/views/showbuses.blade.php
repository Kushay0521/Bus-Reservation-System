<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showbuses</title>
    <link rel="stylesheet" href="{{ asset('/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/showbuses.css') }}">
</head>
<body>
        <div class="container mt-5" >
        <div class="row py-3 mb-5 heading"> 
                <div class="row text-white">
                <div class="col-md-6 text-center"><b>Total Trips Available: {{$num}}</b> </div>  
                <div class="col-md-6 text-center"><b>Date: {{session('date')}}</b></div>
                </div> 
        </div>
        @if($num) 
          @foreach($buses as $bus)
              <!-- @php   -->
              $fare=$bus['fare'];
              if($bus['type']=="ac") 
                $fare=$bus['fare']+200 ;
              <!-- @endphp -->
              @if($bus['max_seats']>0)
                <div class="row g-0 border border-3 shadow my-5 p-3">
                  <div class="col-6 responsive">
                  <table class="table table-borderless text-capitalize m-0">
                  <tbody class="text-nowrap special">
                  <tr>
                    <th class="col-6">Source :</th>
                    <td class="col-6">{{$bus['source']}}</td>
                  </tr>
                  <tr>
                    <th class="col-6">Destination :</th>
                    <td class="col-6">{{$bus['destination']}}</td>
                  </tr>
                  <tr>
                    <th class="col-6">Departure :</th>
                    <td class="col-6">{{$bus['departure']}}</td>
                  </tr>
                  <tr>
                    <th class="col-6">Arrival :</th>
                    <td class="col-6">{{$bus['arrival']}}</td>
                  </tr>
                  </tbody>
                  </table>
                  </div>
                  <div class="col-6 responsive">
                      <table class="table table-borderless text-capitalize m-0">
                  <tbody class="text-nowrap">
                  <tr>
                    <th class="col-6">Available seats :</th>
                    <td class="col-6">{{$bus['max_seats']}}</td>
                  </tr>
                  <tr>
                    <th class="col-6">Bus type :</th>
                    <td class="col-6 text-uppercase">{{$bus['type']}}</td>
                  </tr>
                  <tr>
                    <th class="col-6">Fare :</th>
                    <td class="col-6">{{$fare}}</td>
                  </tr>
                  <tr>
                    <th class="col-6">Date :</th>
                    <td class="col-6">{{session('date')}}</td>
                  </tr>
                  </tbody>
                  </table>
                </div>
                @if(session('logged')==true)
                  <div class="row g-0 my-3 mx-1">
                    <div class="col-2">
                      <button class="btn btn-red book" data-bs-toggle="modal" data-bs-target="#exampleModal" value="{{$bus['bus_id']}}">Book</button>
                    </div>
                  </div>
                @endif
                </div>
              @endif
        @endforeach
      @endif
    </div>
<div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/book" method="POST">
      @csrf
      <div class="modal-body">
        <div class="mb-3">
                            <label for="busid" class="form-label">Bus number</label>
                                <input type="text" class="form-control" id="busid" name="busid" readonly>
                            </div>
      <div class="mb-3">
                                <label for="seats" class="form-label">Enter number of seats</label>
                                <input type="number" class="form-control" name="seats" id="seats" value="1" required>
                                <span class="form-text invalid-feedback">Seats must be greater than 0 or less than available seats</span>
                            </div>
      <div class="mb-3">
                                <label for="fare" class="form-label">Total fare</label>
                                <input type="number" class="form-control" name="fare" id="fare" readonly>
                            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-red" id="pay">Pay</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('/js/showbuses.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showticket</title>
    <link rel="stylesheet" href="{{ asset('/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/showticket.css') }}">
</head>
<body>
    @php
        $booked2=true;
    @endphp
        @if($book)
            @if($booked)
                <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                <strong>Booked!</strong> Ticket booked successfully !!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @else
                @php $booked2=false; @end php
                <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                <strong>Oops!</strong> Something went wrong.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        @endif
@if($booked2)
    <div class="container mt-5 print">
        <div class="row">
        <div class="display-4 mb-2 heading1">Your Ticket</div>
        <div class="display-4 mb-2 heading2">Ticket</div>
        <hr  size="5px">
    </div>
    <div class="row g-0">
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
    <div class="container my-3 print-none">
    <div class="row mx-1 g-0">
        <div class="col-sm-12">
        <span><b class="text-">*</b>Note: Please print the ticket and bring the ticket when you will get in the bus</span> </div>
        <div class="col-sm-12 my-3">   
        <button class="btn btn-red" id="print">Print</button>
        </div>
    </div>
</div>
@endif
<script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('/js/showticket.js') }}"></script>
</body>
</html>
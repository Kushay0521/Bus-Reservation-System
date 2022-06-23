<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookings extends Controller
{
    public function Show(){
        $bookings=DB::table('ticket_info')->join('bus_route','ticket_info.bus_id','=','bus_route.bus_id')->join('bus_info','bus_route.bus_id','=','bus_info.bus_id')->join('route_info','bus_route.route_id','=','route_info.route_id')->where('P_id',session('p_id'))->get();
        $bookings = json_decode($bookings,true);
        $num=count($bookings);
        session()->put('num',$num);
        session()->put('bookings',$bookings);
        session()->put('showbook',true);
        return redirect('showbookings');
    }
    public function ShowTicket(Request $req){
        session()->put('goaction',true);
        session()->put('cancel',false);
        session()->put('cancelled',false);
        $ticket=DB::table('ticket_info')->join('bus_route','ticket_info.bus_id','=','bus_route.bus_id')->join('route_info','bus_route.route_id','=','route_info.route_id')->where('ticket_id',$req->input('ticketid'))->get();
        $ticket = json_decode($ticket,true);
        $num=count($ticket);
        if($num){
            session()->put('ticket_id',$ticket[0]['ticket_id']);
            session()->put('ticket',$ticket[0]);
            return redirect('cancellation');
        }
        else{
            session()->put('ticket',false);
            return redirect('cancellation');
        }
    }
    public function CancelTicket(){
        session()->put('goaction',true);
        session()->put('cancel',true);
        $cancelled=DB::table('ticket_info')->where('ticket_id',session('ticket_id'))->delete();
        session()->put('cancelled',$cancelled);
        session()->put('ticket',!$cancelled);
        session()->pull('ticket_id');
        return redirect('cancellation');
    }
}

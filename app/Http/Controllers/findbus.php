<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class findbus extends Controller
{
    public function BusData(Request $req){
        session()->put('date',$req->input('date'));
        $route = DB::table('route_info')->where([['source','=',$req->input('source')],['destination','=',$req->input('dest')]])->get();
        $route_id = json_decode($route,true);
        $route_id=$route_id[0]['route_id'];
        $buses=DB::table('bus_route')->leftJoin('bus_info','bus_route.bus_id','=','bus_info.bus_id')->leftJoin('route_info','bus_route.route_id','=','route_info.route_id')->where('route_info.route_id',$route_id)->get();
        $buses = json_decode($buses,true);
        $num=count($buses);
        for($i=0;$i<$num;$i++){
            $reserved=DB::table('ticket_info')->where([['bus_id','=',$buses[$i]['bus_id']],['date','=',session('date')]])->sum('seats');
            $buses[$i]['max_seats']-=$reserved;
        }
        session()->put('buses',$buses);
        session()->put('numofbus',$num);
        session()->put('showbusdata',true);
        return redirect('showbuses');
    }
    public function BookBus(Request $req){
        $result=false;
        while(!$result){
            $ticket_id=rand(1,1000);
            $result=DB::table('ticket_info')->insert([
                'ticket_id'=>$ticket_id,
                'p_id'=>session('p_id'),
                'bus_id'=>$req->input('busid'),
                'seats'=>$req->input('seats'),
                'total_fare'=>$req->input('fare'),
                'date'=>session('date')
                ]
            );
        }
        $ticket=DB::table('ticket_info')->join('bus_route','ticket_info.bus_id','=','bus_route.bus_id')->join('route_info','bus_route.route_id','=','route_info.route_id')->where('ticket_id',$ticket_id)->get();
        $ticket = json_decode($ticket,true);
        session()->put('book',true);
        session()->put('booked',$result);
        session()->put('ticket',$ticket[0]);
        session()->put('showticket',true);
        return redirect('showticket');
    }
}
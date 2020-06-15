<?php

namespace App\Http\Controllers;

use App\Flight;
use App\flight_details;
use App\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{

    public function tickeTreservation(Request $request)
    {
        $ticket = new ticket();
        $ticket->user_id = Auth::id();
        $ticket->flight_id = $request['val'];
        $ticket->status = 1;
        $ticket->save();

        return redirect()->back();
    }

    public function myticket()
    {

        return view('flight.show_myticket');
    }

    public function reomve_ticket($id=null)
    {
        if (!empty($id)) {
            DB::table('ticket_info')->where('id', '=', $id)->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function index()
    {
        return view('flight_dash.view_flight');
    }

    public function addflight(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            $flight = new Flight();
            $flight->airline_id = $data['airline_id'];
            $flight->airline_name = $data['airline_name'];
            $flight->from_location = $data['from_location'];
            $flight->to_location = $data['to_location'];
            $flight->departure_time = $data['departure_time'];
            $flight->arrival_time = $data['arrival_time'];
            $flight->duration = $data['duration'];
            $flight->total_seats = $data['total_seats'];
            $flight->save();
            return redirect('flight/view_flight');
        }
        return view('flight_dash.add_flight');
    }

    public function viewflight()
    {
        $all_flight = Flight::get();
        return view('flight_dash.view_flight')->with(compact('all_flight'));
    }

    public function deleteflight($id = null)
    {

        if (!empty($id)) {
            DB::table('flights')->where('id', '=', $id)->delete();
            return redirect()->back();
        }
    }

    public function editflight(Request $request, $id = null)
    {
        // dd($request);
        if ($request->isMethod('post')) {
            $data = $request->all();


            Flight::where(['id' => $id])->update(['airline_id' => $data['airline_id'],
                'airline_name' => $data['airline_name'], 'from_location' => $data['from_location'],
                'to_location' => $data['to_location'], 'departure_time' => $data['departure_time'],
                'arrival_time' => $data['arrival_time'], 'duration' => $data['duration'], 'total_seats' => $data['total_seats']]);


            return redirect('/flight/view_flight')->with('success', 'updated successfuly');

        }
        $flight_details = Flight::where(['id' => $id])->first();
        return view('flight_dash.edit_flight')->with(compact('flight_details'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        //
    }
}

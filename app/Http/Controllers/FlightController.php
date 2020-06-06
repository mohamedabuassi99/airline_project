<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{

    public function index()
    {
        return view('flight_dash.view_flight');
    }

    public function addflight(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->all();
            $category = new Flight();
            $category->name = $data['name'];
            $category->parent_id = $data['parent_id'];
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->save();
            return redirect('/flight_dash/view_category');
        }
        $levels = Category::where(['parent_id' => 0])->get();
        return view('flight_dash.add_flight')->with(compact('levels'));
    }

    public function viewflight()
    {
//        $categories = Category::get();

//        return view('flight_dash.view_flight')->with(compact('categories'));
        return view('flight_dash.view_flight');
    }

    public function deleteflight($id = null)
    {

        if (!empty($id)) {
            //$c =Category::where([id]=>$id));
            //$c->delete();
            DB::table('categories')->where('id', '=', $id)->delete();
            return redirect()->back();
        }
    }

    public function editflight(Request $request, $id = null)
    {
        // dd($request);
        if ($request->isMethod('post')) {
            $data = $request->all();

            Category::where(['id' => $id])->update(['name' => $data['name'],
                'parent_id' => $data['parent_id'], 'description' => $data['description'],
                'url' => $data['url']]);
            return redirect('/flight_dash/view_flight');

        }
        $category_details = Category::where(['id' => $id])->first();
        $level = Category::where(['parent_id' => 0])->get();
        return view('flight_dash.edit_flight')->with(compact('category_details', 'level'));

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        //
    }
}

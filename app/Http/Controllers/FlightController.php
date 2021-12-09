<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Flight;
use App\Models\Service;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //     $flights = Service::all();
        //    foreach ($flights as $supplier) {
        //      dd($supplier->contact_type) ;
        //    }
        $flights = Service::with('contact')->get();
        return view("flights",compact("flights"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getSuppliers = Contact::where(['supplier_type'=>'flight','contact_type'=>'supplier'])->get();
        return view('addFlight',compact('getSuppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Service::create([
            'service_type' => $request->services,
            'availability' => $request->availability,
            'from_location' => $request->from_location,
            'to_location' => $request->to_location,
            'price' => $request->price,
            'supplier_id' => $request->suppliers
        ]);

        return redirect()->back()->with('message','flight added ') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

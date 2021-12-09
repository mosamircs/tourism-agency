<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cars');
    }

    /**
     * show reserve car form
     */
    public function reservecar()
    {
        return view('reservecar');
    }
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
        $cars = new Car();
        $cars->car_company = $request->car_company;
        $cars->car_type = $request->car_type;
        $cars->pickup_location = $request->pickup_location;
        $cars->destenation_location = $request->destenation_location;
        $cars->car_price = $request->car_price;
        $cars->start_trip = $request->start_trip;
        $cars->end_trip = $request->end_trip;
        $cars->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return $car;
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
        $car = Car::findOrFail($id);
        $car->car_company = $request->car_company;
        $car->car_type = $request->car_type;
        $car->pickup_location = $request->pickup_location;
        $car->destenation_location = $request->destenation_location;
        $car->car_price = $request->car_price;
        $car->start_trip = $request->start_trip;
        $car->end_trip = $request->end_trip;
        $car->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
    }



}

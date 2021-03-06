<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\housings;

class HousingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advert/create_advert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate(request(), [
        'street'=>'required',
        'zipcode'=>'required',
        'town'=>'required'
      ]);

      $housing = new housings();

      $housing->number = $request->name;
      $housing->street = $request->street;
      $housing->building = $request->building;
      $housing->flat = $request->flat;
      $housing->zipcode = $request->zipcode;
      $housing->city = $request->city;
      $housing->area = $request->area;
      $housing->type = $request->type;
      $housing->furnished = $request->furnished;
      $housing->price = $request->price;
      $housing->access = $request->access;
      $housing->room = $request->room;
      $housing->floor = $request->floor;
      $housing->vehicle = $request->vehicle;
      $housing->bedroom = $request->bedroom;
      $housing->description = $request->description;
      $housing->greenhousegaz = $request->greenHouseGaz;
      $housing->enrgeyclass = $request->EnergyClass;
      dd($housing);
      $housing->save();

      return redirect(url('adv/create'));
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

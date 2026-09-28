<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\County;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        $counties = County::all();
        return view('cities.index', compact('cities', 'counties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $counties = County::all();
        return view('cities.create', compact('cities','counties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required']);

        $city = new City();
        $city->county_id = $request->county_id;
        $city->name = $request->name;
        $city->zip_code = $request->zip_code;
        $city->population = $request->population;
        $city->save();

        return redirect()->route('cities.index')->with('success', 'Sikeres mentés');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $city = City::find($id);
        $counties = County::all();
        return view('cities.show', compact('city', 'counties'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $city = City::find($id);
        $counties = County::all();
        return view('cities.edit', compact('city', 'counties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['name'=>'required']);
        $city = City::find($id);
        $city->county_id = $request->county_id;
        $city->name = $request->name;
        $city->zip_code = $request->zip_code;
        $city->population = $request->population;
        $city->save();

        return redirect()->route('cities.index')->with('success', 'Sikeres módosítás');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = City::find($id);
        $city->delete();

        return redirect()->route('cities.index')->with('success','Sikeres törlés');
    }
}

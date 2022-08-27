<?php

namespace App\Http\Controllers\Api;

use App\Models\Zone;
use App\Http\Requests\StoreZoneRequest;
use App\Http\Requests\UpdateZoneRequest;
use App\Http\Controllers\Controller;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Zone::all();
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
     * @param  \App\Http\Requests\StoreZoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreZoneRequest $request)
    {
        //
        return Zone::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Zone::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateZoneRequest  $request
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateZoneRequest $request, $id)
    {
        //
        $zone = Zone::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->name)){
            $zone->name = $request->name;
        }


        $zone->save();

        return $zone;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        //
    }
}

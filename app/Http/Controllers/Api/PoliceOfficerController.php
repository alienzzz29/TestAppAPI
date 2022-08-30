<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PoliceOfficer;
use App\Http\Requests\StorePoliceOfficerRequest;
use App\Http\Requests\UpdatePoliceOfficerRequest;

class PoliceOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PoliceOfficer::all();
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
     * @param  \App\Http\Requests\StorePoliceOfficerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePoliceOfficerRequest $request)
    {
        //
        return PoliceOfficer::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoliceOfficer  $policeOfficer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return PoliceOfficer::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoliceOfficer  $policeOfficer
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliceOfficer $policeOfficer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePoliceOfficerRequest  $request
     * @param  \App\Models\PoliceOfficer  $policeOfficer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePoliceOfficerRequest $request, $id)
    {
        //
        $police = PoliceOfficer::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->first_name)){
            $police->first_name = $request->first_name;
        }

        if(isset($request->middle_name)){
            $police->middle_name = $request->middle_name;
        }

        if(isset($request->last_name)){
            $police->last_name = $request->last_name;
        }

        if(isset($request->contact_no)){
            $police->contact_no = $request->contact_no;
        }

        if(isset($request->police_sig)){
            $police->police_sig = $request->police_sig;
        }

        if(isset($request->rank_id)){
            $police->rank_id = $request->rank_id;
        }
        if(isset($request->position_id)){
            $police->position_id = $request->position_id;
        }
        
        try {
            //code...
            $police->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        

        return $police;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoliceOfficer  $policeOfficer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        PoliceOfficer::find($id)->delete();
        return "Police Officer Successfully Deleted";
    }
}

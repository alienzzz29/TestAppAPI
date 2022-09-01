<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CrimeOffense;
use App\Http\Requests\StoreCrimeOffenseRequest;
use App\Http\Requests\UpdateCrimeOffenseRequest;

class CrimeOffenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CrimeOffense::all();
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
     * @param  \App\Http\Requests\StoreCrimeOffenseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCrimeOffenseRequest $request)
    {
        //
        return CrimeOffense::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CrimeOffense  $crimeOffense
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return CrimeOffense::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CrimeOffense  $crimeOffense
     * @return \Illuminate\Http\Response
     */
    public function edit(CrimeOffense $crimeOffense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCrimeOffenseRequest  $request
     * @param  \App\Models\CrimeOffense  $crimeOffense
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCrimeOffenseRequest $request, $id)
    {
        //
        $co = CrimeOffense::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->name)){
            $co->name = $request->name;
        }

        try {
            //code...
            $co->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
       

        return $co;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CrimeOffense  $crimeOffense
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        CrimeOffense::find($id)->delete();
        return "Crime Offense Successfully Deleted";
    }
}

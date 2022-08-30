<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CriminalRecords;
use App\Http\Requests\StoreCriminalRecordsRequest;
use App\Http\Requests\UpdateCriminalRecordsRequest;

class CriminalRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CriminalRecords::all();
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
     * @param  \App\Http\Requests\StoreCriminalRecordsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCriminalRecordsRequest $request)
    {
        //
        return CriminalRecords::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CriminalRecords  $criminalRecords
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return CriminalRecords::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CriminalRecords  $criminalRecords
     * @return \Illuminate\Http\Response
     */
    public function edit(CriminalRecords $criminalRecords)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCriminalRecordsRequest  $request
     * @param  \App\Models\CriminalRecords  $criminalRecords
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCriminalRecordsRequest $request, $id)
    {
        //
        $cr = CriminalRecords::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->first_name)){
            $cr->first_name = $request->first_name;
        }

        if(isset($request->middle_name)){
            $cr->middle_name = $request->middle_name;
        }

        if(isset($request->last_name)){
            $cr->last_name = $request->last_name;
        }

       

        try {
            //code...
            $cr->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
       

        return $cr;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CriminalRecords  $criminalRecords
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        CriminalRecords::find($id)->delete();
        return "Criminal Record Successfully Deleted";
    }
}

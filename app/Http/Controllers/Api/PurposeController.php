<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Purpose;
use App\Http\Requests\StorePurposeRequest;
use App\Http\Requests\UpdatePurposeRequest;

class PurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Purpose::all();
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
     * @param  \App\Http\Requests\StorePurposeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePurposeRequest $request)
    {
        //
        return Purpose::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Purpose::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function edit(Purpose $purpose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePurposeRequest  $request
     * @param  \App\Models\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurposeRequest $request, $id)
    {
        //
        $purpose = Purpose::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->name)){
            $purpose->name = $request->name;
        }


        $purpose->save();

        return $purpose;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purpose $purpose)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\Barangay;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBarangayRequest;
use App\Http\Requests\UpdateBarangayRequest;

class BarangayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Barangay::all();
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
     * @param  \App\Http\Requests\StoreBarangayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBarangayRequest $request)
    {
        //
        return Barangay::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Barangay::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function edit(Barangay $barangay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarangayRequest  $request
     * @param  \App\Models\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBarangayRequest $request, $id)
    {
        //
        $barangay = Barangay::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->name)){
            $barangay->name = $request->name;
        }


        $barangay->save();

        return $barangay;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barangay $barangay)
    {
        //
    }
}

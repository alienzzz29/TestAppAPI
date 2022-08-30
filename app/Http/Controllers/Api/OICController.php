<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OIC;
use App\Http\Requests\StoreOICRequest;
use App\Http\Requests\UpdateOICRequest;

class OICController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return OIC::all();
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
     * @param  \App\Http\Requests\StoreOICRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOICRequest $request)
    {
        //
        return OIC::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OIC  $oIC
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return OIC::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OIC  $oIC
     * @return \Illuminate\Http\Response
     */
    public function edit(OIC $oIC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOICRequest  $request
     * @param  \App\Models\OIC  $oIC
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOICRequest $request, $id)
    {
        $oic = OIC::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->police_id)){
            $oic->police_id = $request->police_id;
        }
        
        try {
            //code...
            $oic->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        

        return $oic;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OIC  $oIC
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        OIC::find($id)->delete();
        return "OIC Successfully Deleted";
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Findings;
use App\Http\Requests\StoreFindingsRequest;
use App\Http\Requests\UpdateFindingsRequest;

class FindingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Findings::all();
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
     * @param  \App\Http\Requests\StoreFindingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFindingsRequest $request)
    {
        //
        return Findings::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Findings  $findings
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Findings::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Findings  $findings
     * @return \Illuminate\Http\Response
     */
    public function edit(Findings $findings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFindingsRequest  $request
     * @param  \App\Models\Findings  $findings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFindingsRequest $request, $id)
    {
        //
        $findings = Findings::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->findings_remarks)){
            $findings->findings_remarks = $request->findings_remarks;
        }

        if(isset($request->findings_signature)){
            $findings->findings_signature = $request->findings_signature;
        }

        if(isset($request->user_id)){
            $findings->user_id = $request->user_id;
        }

        
        try {
            //code...
            $findings->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        

        return $findings;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Findings  $findings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Findings $findings)
    {
        //
    }
}

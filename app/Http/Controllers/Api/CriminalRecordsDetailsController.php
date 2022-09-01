<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CriminalRecordsDetails;
use App\Http\Requests\StoreCriminalRecordsDetailsRequest;
use App\Http\Requests\UpdateCriminalRecordsDetailsRequest;

class CriminalRecordsDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CriminalRecordsDetails::all();
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
     * @param  \App\Http\Requests\StoreCriminalRecordsDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCriminalRecordsDetailsRequest $request)
    {
        //
        return CriminalRecordsDetails::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CriminalRecordsDetails  $criminalRecordsDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return CriminalRecordsDetails::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CriminalRecordsDetails  $criminalRecordsDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(CriminalRecordsDetails $criminalRecordsDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCriminalRecordsDetailsRequest  $request
     * @param  \App\Models\CriminalRecordsDetails  $criminalRecordsDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCriminalRecordsDetailsRequest $request, $id)
    {
        //
        $crd = CriminalRecordsDetails::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->cr_id)){
            $crd->cr_id = $request->cr_id;
        }

        if(isset($request->co_id)){
            $crd->co_id = $request->co_id;
        }

        if(isset($request->cr_remarks)){
            $crd->cr_remarks = $request->cr_remarks;
        }

       

        try {
            //code...
            $crd->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
       

        return $crd;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CriminalRecordsDetails  $criminalRecordsDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        CriminalRecordsDetails::find($id)->delete();
        return "Criminal Record Details Successfully Deleted";
    }
}

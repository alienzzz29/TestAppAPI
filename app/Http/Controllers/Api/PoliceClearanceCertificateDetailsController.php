<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PoliceClearanceCertificateDetails;
use App\Http\Requests\StorePoliceClearanceCertificateDetailsRequest;
use App\Http\Requests\UpdatePoliceClearanceCertificateDetailsRequest;

class PoliceClearanceCertificateDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PoliceClearanceCertificateDetails::all();
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
     * @param  \App\Http\Requests\StorePoliceClearanceCertificateDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePoliceClearanceCertificateDetailsRequest $request)
    {
        //
        return PoliceClearanceCertificateDetails::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoliceClearanceCertificateDetails  $policeClearanceCertificateDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return PoliceClearanceCertificateDetails::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoliceClearanceCertificateDetails  $policeClearanceCertificateDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliceClearanceCertificateDetails $policeClearanceCertificateDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePoliceClearanceCertificateDetailsRequest  $request
     * @param  \App\Models\PoliceClearanceCertificateDetails  $policeClearanceCertificateDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePoliceClearanceCertificateDetailsRequest $request, $id)
    {
        //
        $pccd = PoliceClearanceCertificateDetails::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->pcc_id)){
            $pccd->pcc_id = $request->pcc_id;
        }

        if(isset($request->applicant_id)){
            $pccd->applicant_id = $request->applicant_id;
        }

        if(isset($request->purpose_id)){
            $pccd->purpose_id = $request->purpose_id;
        }
        if(isset($request->findings_id)){
            $pccd->findings_id = $request->findings_id;
        }
        if(isset($request->ctc_id)){
            $pccd->ctc_id = $request->ctc_id;
        }
        if(isset($request->user_id)){
            $pccd->user_id = $request->user_id;
        }
        if(isset($request->payment_id)){
            $pccd->payment_id = $request->payment_id;
        }
        if(isset($request->status)){
            $pccd->status = $request->status;
        }
        try {
            //code...
            $pccd->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

        

        return $pccd;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoliceClearanceCertificateDetails  $policeClearanceCertificateDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliceClearanceCertificateDetails $policeClearanceCertificateDetails)
    {
        //
    }
}

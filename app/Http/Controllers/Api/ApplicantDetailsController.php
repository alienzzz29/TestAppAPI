<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ApplicantDetails;
use App\Http\Requests\StoreApplicantDetailsRequest;
use App\Http\Requests\UpdateApplicantDetailsRequest;

class ApplicantDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ApplicantDetails::all();
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
     * @param  \App\Http\Requests\StoreApplicantDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicantDetailsRequest $request)
    {
        //
        return ApplicantDetails::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplicantDetails  $applicantDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return ApplicantDetails::find($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicantDetails  $applicantDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicantDetails $applicantDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicantDetailsRequest  $request
     * @param  \App\Models\ApplicantDetails  $applicantDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicantDetailsRequest $request, $id)
    {
        //
        $ad = ApplicantDetails::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->applicant_id)){
            $ad->applicant_id = $request->applicant_id;
        }

        if(isset($request->applicant_qr)){
            $ad->applicant_qr = $request->applicant_qr;
        }

        if(isset($request->applicant_img)){
            $ad->applicant_img = $request->applicant_img;
        }

        if(isset($request->applicant_sig)){
            $ad->applicant_sig = $request->applicant_sig;
        }

        if(isset($request->applicant_thumb)){
            $ad->applicant_thumb = $request->applicant_thumb;
        }

        try {
            //code...
            $ad->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
       

        return $ad;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicantDetails  $applicantDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ApplicantDetails::find($id)->delete();
        return "Applicant Details Successfully Deleted";
    }
}

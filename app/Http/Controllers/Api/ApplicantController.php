<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Http\Requests\StoreApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Applicant::all();
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
     * @param  \App\Http\Requests\StoreApplicantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicantRequest $request)
    {
        //
        return Applicant::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Applicant::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicantRequest  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicantRequest $request, $id)
    {
        //
        $applicant = Applicant::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->first_name)){
            $applicant->first_name = $request->first_name;
        }

        if(isset($request->middle_name)){
            $applicant->middle_name = $request->middle_name;
        }

        if(isset($request->last_name)){
            $applicant->last_name = $request->last_name;
        }

        if(isset($request->contact_no)){
            $applicant->contact_no = $request->contact_no;
        }

        if(isset($request->date_of_birth)){
            $applicant->date_of_birth = $request->date_of_birth;
        }

        if(isset($request->place_of_birth)){
            $applicant->place_of_birth = $request->place_of_birth;
        }

        if(isset($request->civil_status)){
            $applicant->civil_status = $request->civil_status;
        }

        if(isset($request->height)){
            $applicant->height = $request->height;
        }

        if(isset($request->sex)){
            $applicant->sex = $request->sex;
        }

        if(isset($request->nationality)){
            $applicant->nationality = $request->nationality;
        }

        if(isset($request->applicant_qr)){
            $applicant->applicant_qr = $request->applicant_qr;
        }

        if(isset($request->applicant_img)){
            $applicant->applicant_img = $request->applicant_img;
        }

        if(isset($request->applicant_sig)){
            $applicant->applicant_sig = $request->applicant_sig;
        }

        if(isset($request->applicant_thumb)){
            $applicant->applicant_thumb = $request->applicant_thumb;
        }

        if(isset($request->address_id)){
            $applicant->address_id = $request->address_id;
        }

        try {
            //code...
            $applicant->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
       

        return $applicant;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}

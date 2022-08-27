<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CommunityTaxCertificate;
use App\Http\Requests\StoreCommunityTaxCertificateRequest;
use App\Http\Requests\UpdateCommunityTaxCertificateRequest;

class CommunityTaxCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CommunityTaxCertificate::all();
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
     * @param  \App\Http\Requests\StoreCommunityTaxCertificateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommunityTaxCertificateRequest $request)
    {
        //
        return CommunityTaxCertificate::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommunityTaxCertificate  $communityTaxCertificate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return CommunityTaxCertificate::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommunityTaxCertificate  $communityTaxCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(CommunityTaxCertificate $communityTaxCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommunityTaxCertificateRequest  $request
     * @param  \App\Models\CommunityTaxCertificate  $communityTaxCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommunityTaxCertificateRequest $request, $id)
    {
        //
        $ctc = CommunityTaxCertificate::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->ctc_number)){
            $ctc->ctc_number = $request->ctc_number;
        }

        if(isset($request->ctc_dateissue)){
            $ctc->ctc_dateissue = $request->ctc_dateissue;
        }

        if(isset($request->ctc_placeissue)){
            $ctc->ctc_placeissue = $request->ctc_placeissue;
        }

        $ctc->save();

        return $ctc;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommunityTaxCertificate  $communityTaxCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommunityTaxCertificate $communityTaxCertificate)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PoliceClearanceCertificate;
use App\Http\Requests\StorePoliceClearanceCertificateRequest;
use App\Http\Requests\UpdatePoliceClearanceCertificateRequest;

class PoliceClearanceCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PoliceClearanceCertificate::all();
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
     * @param  \App\Http\Requests\StorePoliceClearanceCertificateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePoliceClearanceCertificateRequest $request)
    {
        //
        return PoliceClearanceCertificate::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoliceClearanceCertificate  $policeClearanceCertificate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return PoliceClearanceCertificate::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoliceClearanceCertificate  $policeClearanceCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(PoliceClearanceCertificate $policeClearanceCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePoliceClearanceCertificateRequest  $request
     * @param  \App\Models\PoliceClearanceCertificate  $policeClearanceCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePoliceClearanceCertificateRequest $request, $id)
    {
        //
        $pcc = PoliceClearanceCertificate::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->pcc_number)){
            $pcc->pcc_number = $request->pcc_number;
        }

        if(isset($request->issued_date)){
            $pcc->issued_date = $request->issued_date;
        }


        $pcc->save();

        return $pcc;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoliceClearanceCertificate  $policeClearanceCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoliceClearanceCertificate $policeClearanceCertificate)
    {
        //
    }
}

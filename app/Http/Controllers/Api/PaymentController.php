<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Payment::all();
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
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        //
        return Payment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Payment::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, $id)
    {
        //
        $payment = Payment::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->or_number)){
            $payment->or_number = $request->or_number;
        }

        if(isset($request->payment)){
            $payment->payment = $request->payment;
        }

        // if(isset($request->applicant_id)){
        //     $payment->applicant_id = $request->applicant_id;
        // }

        if(isset($request->user_id)){
            $payment->user_id = $request->user_id;
        }

        try {
            //code...
            $payment->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        

        return $payment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Payment::find($id)->delete();
        return "Payment Successfully Deleted";
    }
}

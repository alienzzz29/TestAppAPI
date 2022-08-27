<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rank;
use App\Http\Requests\StoreRankRequest;
use App\Http\Requests\UpdateRankRequest;

class RankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Rank::all();
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
     * @param  \App\Http\Requests\StoreRankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRankRequest $request)
    {
        //
        return Rank::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Rank::find($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function edit(Rank $rank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRankRequest  $request
     * @param  \App\Models\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRankRequest $request, $id)
    {
        //
         //
         $rank = Rank::find($id);

         if(count($request->all()) <= 0){
             return "Nothing to update";
         }
 
         if(isset($request->name)){
             $rank->name = $request->name;
         }
 
 
         $rank->save();
 
         return $rank;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rank $rank)
    {
        //
    }
}

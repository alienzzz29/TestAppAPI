<?php

namespace App\Http\Controllers\Api;

// use App\Models\UserType;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserTypeRequest;
use App\Http\Requests\UpdateUserTypeRequest;
use App\Http\Controllers\Controller;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Role::all();
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
     * @param  \App\Http\Requests\StoreUserTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserTypeRequest $request)
    {
        //
        return Role::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Role::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $userType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserTypeRequest  $request
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserTypeRequest $request, $id)
    {
        //
        $userType = Role::where('id', $id)->get();

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->name)){
            $userType->toQuery()->update(array("name" => $request->name));
        }
        if(isset($request->guard_name)){
            $userType->toQuery()->update(array("guard_name" => $request->guard_name));
        }

        return $userType->fresh();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserType  $userType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $userType)
    {
        //
    }
}

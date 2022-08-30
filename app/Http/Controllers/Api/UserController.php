<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //
        return User::all();
    }

    public function store(StoreUserRequest $request)
    {
        //
        return User::create($request->all());
    }

    public function show($id)
    {
        //
        return User::find($id);
    }

    public function update(UpdateUserRequest $request, $id)
    {
        //
        $user = User::find($id);

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }

        if(isset($request->first_name)){
            $user->first_name = $request->first_name;
        }

        if(isset($request->middle_name)){
            $user->middle_name = $request->middle_name;
        }

        if(isset($request->last_name)){
            $user->last_name = $request->last_name;
        }

        if(isset($request->contact_no)){
            $user->contact_no = $request->contact_no;
        }

        if(isset($request->password)){
            $user->password = bcrypt($request->password);
        }

        

        try {
            //code...
            $user->save();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        

        return $user;
    }

    public function destroy($id)
    {
        //
        User::find($id)->delete();
        return "User Successfully Deleted";
    }
}

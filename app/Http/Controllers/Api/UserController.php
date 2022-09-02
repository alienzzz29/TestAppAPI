<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        //
        return User::with('roles')->get();
    }

    public function store(StoreUserRequest $request)
    {
        //
        // return User::create($request->all());
        // return User::create([
        //     'first_name' => $request->first_name,
        //     'middle_name' => $request->middle_name,
        //     'last_name' => $request->last_name,
        //     'username' => $request->username,
        //     'password' => bcrypt($request->password),
        //     'contact_no' => $request->contact_no
        // ]);
        $user = new User;
        $role = Role::where('id', $request->usertypeid)->get();
        if(count($request->all()) <= 0){
            return "Nothing to Add";
        }
        
        try {
            // code...
            if(!isset($request->usertypeid)){
                return "Add Usertype ID";
            }
            return $user::create([
                    'first_name' => $request->first_name,
                    'middle_name' => $request->middle_name,
                    'last_name' => $request->last_name,
                    'username' => $request->username,
                    'password' => bcrypt($request->password),
                    'contact_no' => $request->contact_no
                ])->assignRole($role);
            
            
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    // public function storeWithUserType(StoreUserRequest $request)
    // {
    //     $user = new User;
    //     $role = Role::where('id', $request->usertypeid)->get();
    //     if(count($request->all()) <= 0){
    //         return "Nothing to Add";
    //     }
        
    //     try {
    //         // code...
    //         if(!isset($request->usertypeid)){
    //             return "Add Usertype ID";
    //         }
    //         return $user::create([
    //                 'first_name' => $request->first_name,
    //                 'middle_name' => $request->middle_name,
    //                 'last_name' => $request->last_name,
    //                 'username' => $request->username,
    //                 'password' => bcrypt($request->password),
    //                 'contact_no' => $request->contact_no
    //             ])->assignRole($role);
            
            
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }


    // }

    public function show($id)
    {
        //
        return User::with('roles')->where('id', '=', $id)->first();
    }

    public function update(UpdateUserRequest $request, $id)
    {
        //
        $user = User::find($id);
        $role = Role::where('id', $request->usertypeid)->get();

        if(count($request->all()) <= 0){
            return "Nothing to update";
        }
        if(!isset($request->usertypeid)){
            return "Add Usertype ID";
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

        // if(isset($request->username)){
        //     $user->username = $request->username;
        // }

        if(isset($request->password)){
            $user->password = bcrypt($request->password);
        }

        if(isset($request->usertypeid)){
            if($user->roles->first()){
                // $user->removeRole;
                $user->removeRole($user->roles->first());
                $user->assignRole($role);
            }
            // // if($user->hasRole('clerk','api')){
            //     $user->removeRole('clerk');
            // }
            
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
        $user = User::find($id);
        $user->delete();
        // return "User Successfully Deleted";
        return response()->json([
            'status' => true,
            'message' => 'User Successfully Deleted'
        ], 200);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    // Create User
    // public function createUser(Request $request)
    // {
    //     try {
    //         //Validate.
    //         $validateUser = Validator::make($request->all(), 
    //         [
    //             'name' => 'required',
    //             'email' => 'required|email|unique:users,email,id',
    //             'password' => 'required'
    //         ]);

    //         if($validateUser->fails()){
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'validation error',
    //                 'error'=> $validateUser->errors()
    //             ], 401);
    //         }

    //         $user = User::create([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password)
    //         ]);

    //         return response()->json([
    //             'status' => true,
    //             'message' => 'User Created Successfully',
    //             'token'=> $user->createToken("API_TOKEN")->plainTextToken
    //         ], 200);

    //     } catch (\Throwable $th) {
    //         //throw $th;
    //         return response()->json([
    //             'status' => false,
    //             'message' => $th->getMessage()
    //         ], 500);
    //     }
        
    // }

    public function loginUser(Request $request)
    {
        # Login User...
        // TODO: Check User Type && if UserType == Admin then goto Admin Panel
        // Else if UserType == Clerk then goto Clerk Panel
        // Else if UserType == Cashier then goto Cashier Panel
        try {
            $validateUser = Validator::make($request->all(), 
            [
                'username' => 'required|string',
                'password' => 'required'
                // 'email' => 'required|email',
                // 'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'error'=> $validateUser->errors()
                ], 401);
            }

            if (!Auth::attempt($request->only('username','password'))) {
                # code...
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record',
                ], 401);
            }

            // $user = User::where('confirmation_code', '=', 123456, 'and')->where('id', '=', 5, 'or')->where('role', '=', 'admin')->first();


            $user = User::with('roles')->where('username', '=', $request->username)->first();
            // $user = User::with('roles')->where('email', $request->email)->first();
            
            return response()->json([
                'status' => true,
                'message' => 'User Login Successfully',
                'token'=> $user->createToken("API_TOKEN")->plainTextToken,
                'data' => $user
            ], 200);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    // public function token(Request $request) 
    // {
    //     if (!Auth::attempt($request->only(['email', 'password']))) {
    //         abort(403);
    //     }
        
    //     $token = auth()->user()->createToken('Our Token');
    //     return response()->json([
    //         'token' => $token->plainTextToken,
    //         'expired_at' => $token->accessToken->expired_at
    //     ]);
    // }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Dotenv\Validator;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function register(Request $request)
    {
        $validator = validator($request->all(), [
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:3|confirmed',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'status' => 'failed',
                'errors' => $validator->errors()->all()
            ], 422);
        }

        //    $user = new User;

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('app token')->accessToken;

        return response()->json(['status' => 'success', 'token' => $token, 'user' => $user], 200);
    }

    public function login(Request $request)
    {

        // dd($request->all());

        $credentials = $request->only(['email', 'password']);

        $validator = validator($credentials, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'failed',
                'errors' => $validator->errors()->all()
            ], 422);
        }

    
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Token')->accessToken;

                return response()->json([
                    'status' => 'success',
                    'token' =>  $token,
                    'user'  => $user
                ], 200);
            }

            return response()->json([
                'message' => 'Passsword is incorrect',
            ], 422);
        }

        return response()->json([
            'message' => 'User does not exist, Please Register',
        ], 422);
    }

    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);

        return response()->json(['status' => 'success', 'data' => $user], 200);
    }



    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }



}

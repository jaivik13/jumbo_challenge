<?php

namespace App\Http\Controllers;

use App\model\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{

    public function add(Request $request)
    {
        $request['api_token'] =  Str::random(40);
        $request['password'] = Hash::make($request['password']);
        $user = user::create($request->all());
        return response()->json(["message" => "created successfully"], 200);
    }


    public function edit(Request $request, $username)
    {
        $user = user::where('username', '=', $username)->first();
        if (is_null($user)) {
            return response()->json(["message" => "Record not found"], 404);
        }
        $user->update($request->all());
        return response()->json(["message" => "update successfully"], 200);
    }


    public function view(Request $request, $username)
    {
        $user = user::where('username', '=', $username)->get();
        return response()->json($user,200);
    }


    public function delete(Request $request, $username)
    {
        $user = user::where('username', '=', $username)->first();
        if (is_null($user)) {
            return response()->json(["message" => "Record not found"], 404);
        }
        $user->delete();
        return response()->json(["message" => "delete successfully"], 200);
    }


    public function withArray(Request $request)
    {
        $json = json_encode($request->all());
        $arr = json_decode($json, true);
        $arr['api_token'] =  Str::random(40);
        $arr['password'] = Hash::make($request['password']);

        $user = user::create($arr->all());

        return response()->json(["message" => "created successfully"], 200);
    }

    public function WithList(Request $request)
    {
        $json = json_encode($request->all());
        $arr = json_decode($json, true);
        $arr['api_token'] =  Str::random(40);
        $arr['password'] = Hash::make($request['password']);
        $user = user::create($arr->all());

        return response()->json(["message" => "created successfully"], 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(["message" => "login successfully"], 200);
        } else {
            return response()->json(["message" => "Invalide User/Password"], 404);
        }
    }

    public function logout()
    {
        Auth::logoutCurrentDevice();
        return response()->json(['message' => 'success'], 200);
    }
}

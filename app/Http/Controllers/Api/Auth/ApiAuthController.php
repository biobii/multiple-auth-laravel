<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiAuthController extends Controller
{
    
    public function adminLogin(Request $request)
    {
        if($request->wantsJson() || $request->expectsJson()) {
            if($request->email !== null && $request->password !== null) {
                if(! $admin = \App\Models\Admin::where('email', $request->email)->first())
                    return response()->json(['error' => 'invalid_credentials'], 401);

                if(password_verify($request->password, $admin->password))
                    return response()->json(['api_token' => $admin->api_token], 200);
                else
                    return response()->json(['error' => 'invalid_credentials'], 401);
            } else {
                return response()->json(['error' => 'email and password required'], 401);
            }
        }

        return response()->json(['error' => 'bad_request'], 400);
    }

    public function listAdmins()
    {
        return \App\Models\Admin::all();
    }

    public function userLogin(Request $request)
    {
        if($request->wantsJson() || $request->expectsJson()) {
            if($request->email !== null && $request->password !== null) {
                if(! $user = \App\Models\User::where('email', $request->email)->first())
                    return response()->json(['error' => 'invalid_credentials'], 401);

                if(password_verify($request->password, $user->password))
                    return response()->json(['api_token' => $user->api_token], 200);
                else
                    return response()->json(['error' => 'invalid_credentials'], 401);
            } else {
                return response()->json(['error' => 'email and password required'], 401);
            }
        }

        return response()->json(['error' => 'bad_request'], 400);
    }

    public function listUsers()
    {
        return \App\Models\User::all();
    }
}

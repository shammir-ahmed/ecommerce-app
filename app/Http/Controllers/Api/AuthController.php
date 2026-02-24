<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $creds = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (! $token = Auth::guard('api')->attempt($creds)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        return response()->json([
            'token' => $token,
            'token_type' => 'Bearer',
            'expires_in_minutes' => auth('api')->factory()->getTTL(),
            'user' => auth('api')->user(),
        ]);
    }

    public function me()
    {
        return response()->json(auth('api')->user());
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validamos las credenciales
        $validator = Validator::make($request->all(), [
            'identifier' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 400);
        }

        // Intentamos autenticar al usuario usando email o username
        $credentials = [
            'password' => $request->password,
        ];

        // Determinamos si el identificador es un email o un username
        $identifier = $request->identifier;
        if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $identifier;

        } else {
            $credentials['username'] = $identifier;
        }

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $accessToken = $user->createToken($user->name, ['*'], now()->addMinutes(1440))->accessToken;

            return response()->json([
                'status' => 'success',
                'accessToken' => $accessToken,
                'userData' => $user,
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Credenciales incorrectas.',
        ], 401);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Si la validación falla, retornamos los errores
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 400);
        }

        // Intentamos autenticar al usuario usando los datos proporcionados
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $accessToken = $user->createToken('YourAppName')->accessToken; // Usando Passport para generar un token de acceso

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

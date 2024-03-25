<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
/**
 * @OA\Get(
 *     path="/login",
 *     summary="Recupera a lista de usuários",
 *     @OA\Response(response=200, description="Operação bem-sucedida")
 * )
 */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        dd($credentials);
        if (Auth::attempt($credentials)) {
            return response()->json(['message' => 'Successful login'], 200);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}

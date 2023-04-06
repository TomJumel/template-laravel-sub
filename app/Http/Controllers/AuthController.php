<?php

namespace App\Http\Controllers;

use App\Classes\Tokenizer;
use App\Http\Middleware\AdminAuthGate;
use App\Models\Admin;
use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{

    public function callback(Request $request)
    {
        //Bde-connect callback
        $token = $request->token;
        if ($token == null) {
            return redirect()->route('filament.auth.login', [
                'error' => $request->error ?? 'No token provided'
            ]);
        }
        $token = Tokenizer::validateAccessToken($token);
        if ($token != null) {
            return redirect("/".env('SUBFOLDER').'/admin')->withCookie(cookie(env('TOKEN_COOKIE_NAME'), $request->token, 60, env('SUB_URL')));
        }
        return redirect()->route('filament.auth.login');
    }

    //logout
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->to(route('filament.auth.login'))->withoutCookie(env('TOKEN_COOKIE_NAME'));
    }
}

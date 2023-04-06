<?php

namespace App\Http\Middleware;

use App\Classes\Tokenizer;
use App\Models\FilamentUserLocalModel;
use Closure;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Mockery\Exception;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     * if the user is not authenticated, redirect to CAS login, we save authState in the session
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $token = $request->cookie(env('TOKEN_COOKIE_NAME'));
            if ($token === null) {
                return \redirect()->route('filament.auth.login');
            }
            $user = Tokenizer::validateAccessToken($token);
            if ($user === null) {
                return \redirect()->route('filament.auth.login');
            }
            $filaUser = new FilamentUserLocalModel($user);
            Filament::auth()->login($filaUser);
            return $next($request);
        } catch (Exception $e) {
            return \redirect()->route('filament.auth.login');
        }
    }
}

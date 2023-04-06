<?php

namespace App\Classes;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Tokenizer
{

    public static function getAccessTokenPublicKey()
    {
        $publicKeyFile = storage_path('app/keys/bde-connect.pub');
        return openssl_pkey_get_public(file_get_contents($publicKeyFile));
    }
    //validate token
    public static function validateAccessToken($token)
    {
        $publicKey = self::getAccessTokenPublicKey();
        try {
            $decoded = JWT::decode($token, new Key($publicKey, 'RS256'));
            return $decoded->payload;
        } catch (\Exception $e) {
            return null;
        }
    }
}

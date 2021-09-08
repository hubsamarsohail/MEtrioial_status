<?php

namespace App\Classes;

use Lindelius\JWT\Algorithm\HMAC\HS256;
use Lindelius\JWT\JWT;

class JWToken extends JWT {

    use HS256;

}

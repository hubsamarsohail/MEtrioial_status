<?php

namespace App\Http\Middleware;

use Closure, App\Constants\API\Messages as Msg, App\Constants\API\ErrorCodes as EC;

class ValidateToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->header('Authorization'))
            return responseJson(['error' => ['msg' => Msg::gnl[EC::Gone]]], EC::Gone, $request); // if no token
        $response = decodeJWT($request->header('Authorization'));
        $validateToken = self::validateToken($response);
        if (isset($validateToken->flag)) return responseJson(['error' => ['msg' => $validateToken->data['msg']]], $validateToken->data['status_code'], $request);
        if (!isset($response->other->user_id))
            return responseJson(['error' => ['msg' => Msg::gnl[EC::Conflict]]], EC::Conflict, $request);  // if token is not valid
        $GLOBALS['user'] = (array) $response->other;
        $request->request->add($GLOBALS['user']);
        return $next($request);
    }

    private static function validateToken($response)
    {
        $data = [];
        if ($response == false) $data = ['flag' => true, 'data' => ['status_code' => EC::Conflict, 'msg' => Msg::gnl[EC::Conflict]]];
        if (is_string($response)) $data = ['flag' => true, 'data' => ['status_code' => EC::Conflict, 'msg' => $response]];
        return (object)$data;
    }
}

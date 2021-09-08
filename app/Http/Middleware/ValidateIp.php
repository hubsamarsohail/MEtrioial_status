<?php

namespace App\Http\Middleware;

use Closure, App\Constants\API\Messages as Msg, App\Constants\API\Constant;
use App\Constants\API\ErrorCodes as EC;

class ValidateIp
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
        $IP = self::handleIp($request);
        if ($IP == false)  // Does not exist
            return responseJson(['error' => ['msg' => request()->ip() . ' : ' . Msg::Ip[EC::noIP]]], EC::noIP, $request);
        else if ($IP->is_active == Constant::inActive) // IP is white-list but inactive
            return responseJson(['error' => ['msg' => request()->ip() . ' : ' . Msg::Ip[EC::inactiveIP]]], EC::inactiveIP, $request);
        return $next($request);
    }

    private static function handleIp($request)
    {
        $ip = request()->ip();
        $request->request->add(['ip' => $ip]);
        $IpList = Constant::$IpList;
        if (isset($IpList[$ip]) && is_array($IpList[$ip]))
            return (object)$IpList[$ip];
        return false;
    }
}

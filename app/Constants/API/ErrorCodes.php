<?php

namespace App\Constants\API;


class ErrorCodes
{
    const success = 200;
    ////////////////////////////////////////////////////// Authorization Key Codes
    const badRequest = 400;
    const noIP = 401;
    const forbidden = 403;
    const notFound = 404;
    const methodNotAllowed = 405;
    const inactiveIP = 406;
    const Conflict = 409;
    const Gone = 410;
    const exception = 417;
    const preConditionRequired = 428;

}

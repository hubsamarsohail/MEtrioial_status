<?php

namespace App\Constants\API;


class Constant
{
    const issuer = 'api.ettm';
    const active = 1;
    const inActive = 0;
    const isActive = ['Active' => 1, 'Inactive' => 0];
    const publicDirUrl = 'https://matrimonial.techhive.pk/public/';

    public static $IpList = [
        '::1' => ['is_active' => self::active]
    ];

    public static $perPage = [10, 20, 50, 100];
    public static $entryExit = ['Entry' => 1, 'Exit' => 2];
    public static $keys = ['Used' => 1, 'Unused' => 0];

}

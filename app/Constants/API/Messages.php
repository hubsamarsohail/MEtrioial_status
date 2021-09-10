<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 5/29/2018
 * Time: 1:04 AM
 */

namespace App\Constants\API;


class Messages
{
    ////////////////////////////////// User Messages /////////////////////////////////////////
    const user = [
        '403' => 'Invalid username/password',
        '200' => 'Access Token Generated Successfully',
    ];

    const userReg = [
        '403' => 'User could not created',
        '200' => 'User has been created successfully'
    ];

    ///////////////////////////////////////////////////////////// Pages
    const pages = [
        'view' => [
            '200' => 'Information fetched successfully'
        ],
        'create' => [
            '403' => 'Page could not created',
            '200' => 'Page created successfully'
        ],
        'update' => [
            '403' => 'Page could not update',
            '200' => 'Page has been updated'
        ],
        'delete' => [
            '403' => 'Page could not delete',
            '200' => 'Page has been deleted'
        ]
    ];

    ///////////////////////////////////////////////////////////// Services
    const services = [
        'view' => [
            '200' => 'Information fetched successfully'
        ],
        'create' => [
            '403' => 'service could not created',
            '200' => 'service created successfully'
        ],
        'update' => [
            '403' => 'service could not update',
            '200' => 'service has been updated'
        ],
        'delete' => [
            '403' => 'service could not delete',
            '200' => 'service has been deleted'
        ]
    ];

    ///////////////////////////////////////////////////////////// cms
    const cms = [
        'view' => [
            '200' => 'Information fetched successfully'
        ],
        'create' => [
            '403' => 'cms could not created',
            '200' => 'cms created successfully'
        ],
        'update' => [
            '403' => 'cms could not update',
            '200' => 'cms has been updated'
        ],
        'alreadyExist' => [
            '403' => 'cms already exist',
        ]
    ];




    /////////////////////////////////// General Errors ///////////////////////////////////////
    const gnl = [
        '410' => 'Authorization key is missing',
        '409' => 'Authorization key is invalid',
        '404' => 'API route not found',
        '405' => 'Method is not allowed for the requested route',
        '417' => 'Unknown error occurred',
        '428' => 'Validation Error(s)',
    ];


    ////////////////////////////// IP-Msgs ///////////////////////////////////////////
    const Ip = [
        '406' => 'IP IS WHITELISTED BUT INACTIVE',
        '401' => 'IP IS NOT WHITELISTED',
    ];

}

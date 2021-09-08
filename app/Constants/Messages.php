<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 5/29/2018
 * Time: 1:04 AM
 */

namespace App\Constants;


class Messages
{

    ////////////////////////////////// User Custom Messages /////////////////////////////////////////
    const rec_cretead = 'Record created successfully.';
    const rec_updated = 'Record has been updated.';
    const rec_deleted = 'Record has been deleted.';
    const rec_error = 'Oops! action could not complete.';
    const invalid_user_pass = 'Invalid Username/Password.';
    const distances_error = 'Distances given are not valid';

    ////////////////////////////////// User Messages /////////////////////////////////////////
    const user = [
        'registered' => 'User has been registered',
        'logout' => 'User has been logout',
        'invalid' => 'Invalid username/password', // 101
    ];

    /////////////////////////////////// General Errors ///////////////////////////////////////
    /// 100 validation error
    const gnl = [
        'msg1' => 'Unknown error occurred', // 401
        'msg2' => 'Authorization key is missing', // 300
        'msg3' => 'Problem while inserting the record', //103
        'msg4' => 'Transaction could not complete', //104
        'msg5' => 'Authorization key is invalid', //301
    ];

    ////////////////////////////// M-Tag ///////////////////////////////////////////
    const mTag = [
        'noMtag' => 'Invalid M-Tag ID',
        'success' => 'Transaction has been completed successfully',
        'mTagCoy' => 'mtag_id and company_id can\'t use at same time',
    ];

    ////////////////////////////// IP-Msgs ///////////////////////////////////////////
    const Ip = [
        'inActive' => 'IP IS WHITELISTED BUT INACTIVE',
        'noIp' => 'IP IS NOT WHITELISTED',
    ];

    /////////////////////////////// Transaction Msgs //////////////////////////////////
    const trans = [
        'noTrans' => 'TRANSACTION DOES NOT EXIST',
        'empTransHis' => 'TRANSACTION HISTORY DOES NOT FOUND',
        'monthDiff' => 'TRANSACTION HISTORY ERROR. FROM DATE DIFFERENCE IS MORE THAN TWO MONTHS FROM CURRENT DATE',
    ];

    /////////////////////////////////////////////////////////////////////////// Web Messages ///////////////////

    const userWeb = [
        'invalid' => 'Username/Password Invalid',
        'delete' => 'User has been deleted',
        'registered' => 'User has been registered',
        'update' =>   'User updated successfully'
    ];

    const webGen = [
        'expireTime' => 'Session has been expired. Please re-login to continue'
    ];

    ////////////////////////////////// User Messages /////////////////////////////////////////
//    const user = [
//        '403' => 'Invalid username/password',
//        '200' => 'Access Token Generated Successfully',
//    ];

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




//    /////////////////////////////////// General Errors ///////////////////////////////////////
//    const gnl = [
//        '410' => 'Authorization key is missing',
//        '409' => 'Authorization key is invalid',
//        '404' => 'API route not found',
//        '405' => 'Method is not allowed for the requested route',
//        '417' => 'Unknown error occurred',
//        '428' => 'Validation Error(s)',
//    ];

}

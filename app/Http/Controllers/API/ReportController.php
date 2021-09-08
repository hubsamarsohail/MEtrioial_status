<?php
/**
 * Created by PhpStorm.
 * User: Junaid
 * Date: 3/14/2019
 * Time: 3:22 PM
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller, Illuminate\Http\Request, App\Constants\API\ErrorCodes as EC;
use \Exception, App\Traits\Motorways, App\Constants\API\Messages as Msg;
use App\Traits\Reports, App\Traits\EntryExit;


class ReportController extends Controller
{

    public function entryExitTransaction(Request $request)
    {
        try {
            if ($validator = EntryExit::validateEntryExit($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = EntryExit::doTransaction($request);
            if (!$Obj)
                return responseJson(['error' => ['msg' => Msg::entryExit['create'][EC::forbidden]]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => Msg::entryExit['create'][EC::success], 'data' => []]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function getTransactions(Request $request)
    {
        try {
            if ($validator = EntryExit::validateReportingParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Records = EntryExit::getEntriesExits($request);
            return responseJson(['success' => ['msg' => Msg::entryExit['view'][EC::success], 'data' => EntryExit::prepareViewEntriesExitsResponse($Records)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

}
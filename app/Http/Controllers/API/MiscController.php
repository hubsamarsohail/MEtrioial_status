<?php
/**
 * Created by PhpStorm.
 * User: Junaid
 * Date: 3/14/2019
 * Time: 3:22 PM
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller, Illuminate\Http\Request, App\Constants\API\ErrorCodes as EC, Exception;
use App\Constants\API\Messages as Msg, App\Traits\Pages, App\Traits\Services;
use App\Traits\CMS;

class MiscController extends Controller
{
    public function createPage(Request $request)
    {
        try {
            if ($validator = Pages::validatePage($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = Pages::createOrUpdateOrDeletePage($request);
            if (!isset($Obj->page_id))
                return responseJson(['error' => ['msg' => Msg::pages['create'][EC::forbidden]]], EC::forbidden, $request);
            $Obj->makeHidden(['tenant_id']);
            return responseJson(['success' => ['msg' => Msg::pages['create'][EC::success], 'data' => $Obj->toArray()]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function viewPages(Request $request)
    {
        try {
            if ($validator = Pages::validatePageParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Records = Pages::getPages($request, true);
            return responseJson(['success' => ['msg' => Msg::pages['view'][EC::success], 'data' => Pages::preparePagesData($Records)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function updatePage(Request $request)
    {
        try {
            $request->request->add(['updatePage' => true]);
            if ($validator = Pages::validatePageParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = Pages::createOrUpdateOrDeletePage($request);
            if (!isset($Obj->page_id))
                return responseJson(['error' => ['msg' => Msg::pages['update'][EC::forbidden]]], EC::forbidden, $request);
            $Obj->makeHidden(['tenant_id']);
            return responseJson(['success' => ['msg' => Msg::pages['update'][EC::success], 'data' => $Obj->toArray()]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function deletePage(Request $request)
    {
        try {
            $request->request->add(['deletePage' => true, 'action' => 'delete']);
            if ($validator = Pages::validatePageParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = Pages::createOrUpdateOrDeletePage($request);
            if ($Obj != true)
                return responseJson(['error' => ['msg' => Msg::pages['delete'][EC::forbidden]]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => Msg::pages['delete'][EC::success], 'data' => []]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }

    }


    public function createService(Request $request)
    {
        try {
            if ($validator = Services::validateService($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = Services::createOrUpdateOrDeleteService($request);
            if (!isset($Obj->service_id))
                return responseJson(['error' => ['msg' => Msg::services['create'][EC::forbidden]]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => Msg::services['create'][EC::success], 'data' => Services::prepareServiceData($Obj)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function viewServices(Request $request)
    {
        try {
            if ($validator = Services::validateServiceParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Records = Services::getServices($request, true);
            return responseJson(['success' => ['msg' => Msg::services['view'][EC::success], 'data' => Services::prepareServicesData($Records)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function updateService(Request $request)
    {
        try {
            $request->request->add(['updateService' => true]);
            if ($validator = Services::validateServiceParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = Services::createOrUpdateOrDeleteService($request);
            if (!isset($Obj->service_id))
                return responseJson(['error' => ['msg' => Msg::services['update'][EC::forbidden]]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => Msg::services['update'][EC::success], 'data' => Services::prepareServiceData($Obj)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }
    public function deleteService(Request $request)
    {
        try {
            $request->request->add(['deleteService' => true, 'action' => 'delete']);
            if ($validator = Services::validateServiceParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = Services::createOrUpdateOrDeleteService($request);
            if ($Obj != true)
                return responseJson(['error' => ['msg' => Msg::services['delete'][EC::forbidden]]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => Msg::services['delete'][EC::success], 'data' => []]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }

    }

    public function createCMS(Request $request)
    {
        try {
            if ($validator = CMS::validateCMS($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Records = CMS::getCMS($request, false, true);
            if(isset($Records->cms_id)) // Record Exist
                return responseJson(['error' => ['msg' => Msg::cms['alreadyExist'][EC::forbidden]]], EC::forbidden, $request);
            $Obj = CMS::createOrUpdateOrDeleteCMS($request);
            if (!isset($Obj->cms_id))
                return responseJson(['error' => ['msg' => Msg::cms['create'][EC::forbidden]]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => Msg::cms['create'][EC::success], 'data' => CMS::prepareCmsData($Obj)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function viewCMS(Request $request)
    {
        try {
            if ($validator = CMS::validateCMSParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Records = CMS::getCMS($request, false, true);
            return responseJson(['success' => ['msg' => Msg::cms['view'][EC::success], 'data' => CMS::prepareCmsData($Records)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }

    public function updateCMS(Request $request)
    {
        try {
            $request->request->add(['updateCMS' => true]);
            if ($validator = CMS::validateCMSParams($request))
                return responseJson(['error' => ['msg' => Msg::gnl[EC::preConditionRequired], 'data' => $validator->errors()->getMessages()]], EC::preConditionRequired, $request);
            $Obj = CMS::createOrUpdateOrDeleteCMS($request);
            if (!isset($Obj->cms_id))
                return responseJson(['error' => ['msg' => Msg::cms['update'][EC::forbidden]]], EC::forbidden, $request);
            return responseJson(['success' => ['msg' => Msg::cms['update'][EC::success], 'data' => CMS::prepareCmsData($Obj)]], EC::success, $request); // success
        } catch (Exception $e) {
            return responseJson(['error' => ['msg' => Msg::gnl[EC::exception]]], EC::exception, $request); // exception
        }
    }
}

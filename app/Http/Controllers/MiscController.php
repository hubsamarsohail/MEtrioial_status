<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller, Illuminate\Http\Request,Exception;
use App\Constants\Constant as CT, App\Traits\Pages, App\Traits\Services, App\Constants\ErrorCodes as EC;
use App\Traits\CMS;
use App\Traits\Users;
use GuzzleHttp\Exception\ClientException;
use App\Constants\Messages as Msg;
use Egulias\EmailValidator\Exception\AtextAfterCFWS;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Illuminate\Support\Facades\View;
use Hashids;

class MiscController extends Controller
{

    public function getServiceDetail(Request $request){
        $request->session()->put('cms_data', '');
        $client = new Client();
        $header_arr = get_access_token();
        $title = $request->service_title;
        try{
            $response = $client->request('GET',CT::baseURL.'/misc/get-cms',[
                'headers' => $header_arr,
            ]);
            $cms_result = $response->getBody()->getContents();
            $cms_data = json_decode($cms_result, true);
            $cms = $cms_data['success']['data'];
            $response = $client->request('GET',CT::baseURL.'/misc/get-services',[
                'headers' => $header_arr,
            ]);
            $result = $response->getBody()->getContents();
            $data = json_decode($result, true);
            $services = $data['success']['data'];
            $getPages = \App\Models\Pages::get();
            session()->put('cms_data', ['services' => $services, 'cms' => $cms]);
            $cms = session()->get('cms_data');

            return view('frontend.ServiceDetail.serviceDetail',['data'=>$cms['services'],'cms_data' => $cms['cms'],'service_title' => $title ,'pages' => $getPages]);
        }catch (ClientException $e){
            return view ('frontend.errors.error', ['code' => ($e->getCode() == '0' ? '000' : $e->getCode()), 'message' => $e->getResponse()->getBody()->getContents()]); // exception
        }
    }

    public function getPagesDetail(Request $request, $id){
        $id = Hashids::decode($id)[0];
        $pagesdata =     Pages::getPageDetail($id);

        $request->session()->put('cms_data', '');
        $client = new Client();
        $header_arr = get_access_token();
        $title = $request->service_title;
        try{
            $response = $client->request('GET',CT::baseURL.'/misc/get-cms',[
                'headers' => $header_arr,
            ]);
            $cms_result = $response->getBody()->getContents();
            $cms_data = json_decode($cms_result, true);
            $cms = $cms_data['success']['data'];
            $response = $client->request('GET',CT::baseURL.'/misc/get-services',[
                'headers' => $header_arr,
            ]);
            $result = $response->getBody()->getContents();
            $data = json_decode($result, true);
            $services = $data['success']['data'];
            $getPages = \App\Models\Pages::get();
            session()->put('cms_data', ['services' => $services, 'cms' => $cms]);
            $cms = session()->get('cms_data');
            return view('frontend.PagesDetail.index',['data'=>$cms['services'],'cms_data' => $cms['cms'],'service_title' => $title ,'pages' => $getPages ,'pagesDetail' => $pagesdata]);
        }catch (ClientException $e){
            return view ('frontend.errors.error', ['code' => ($e->getCode() == '0' ? '000' : $e->getCode()), 'message' => $e->getResponse()->getBody()->getContents()]); // exception
        }
    }



//    landing page function
    public function getCMS(Request $request){
        try{
            $request->session()->put('cms_data', '');
            $client = new Client();
            $header_arr = get_access_token();
            $response = $client->request('GET',CT::baseURL.'/misc/get-cms',[
                    'headers' => $header_arr,
                ]);
                $cms_result = $response->getBody()->getContents();
                $cms_data = json_decode($cms_result, true);
                $cms = $cms_data['success']['data'];
                $response = $client->request('GET',CT::baseURL.'/misc/get-services',[
                    'headers' => $header_arr,
                ]);
                $result = $response->getBody()->getContents();
                $data = json_decode($result, true);
                $services = $data['success']['data'];
                session()->put('cms_data', ['services' => $services, 'cms' => $cms]);
                $cms = session()->get('cms_data');
                $getPages = \App\Models\Pages::get();
                return view('frontend.landingpage.landingPage',['data'=>$cms['services'],'cms_data' => $cms['cms'],'pages' => $getPages]);
        }
        catch (ClientException $e) {
//            return exceptionPageError($e->getCode());
            return view ('frontend.errors.error', ['code' => ($e->getCode() == '0' ? '000' : $e->getCode()), 'message' => $e->getResponse()->getBody()->getContents()]); // exception
        }
    }
}

<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request, Route;
use App\Traits\Services;
use Illuminate\Support\Facades\Validator;
use App\Constants\Messages,App\Constants\Constant;
use App\Constants\Constant as CT;
use GuzzleHttp\Client;


class ServiceController extends Controller
{
    public function create(Request $request)
    {
        try {
            if ($request->method() == 'POST') {
                $client = new Client();
                $headers_arr = get_access_token();
                try {
                    $response = $client->request('POST', CT::baseURL . '/misc/create-service', [
                        'headers' => $headers_arr,
                        'form_params' => [
                            'title' => $request->title,
                            'excerpt' => $request->excerpt,
                            'img' => $request->img,
                            'description' => $request->description
                        ]
                    ]);
                    $result = $response->getBody()->getContents();
                    $data = json_decode($result, true);
                    $services = $data['success']['msg'];
                    return view('backend.services.create', ['message' => $services]);
                } catch (\GuzzleHttp\Exception\ClientException $e) {
                    json_decode($e->getResponse()->getBody()->getContents());
                }
            }
            return view('backend.services.create');
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }


    public function view(Request $request)
    {
        try {
            $client = new Client();
            $headers_arr = get_access_token();
            try{
                $response = $client->request('GET',CT::baseURL.'/misc/get-services',[
                    'headers' => $headers_arr
                ]);
                $result = $response->getBody()->getContents();
                $data = json_decode($result, true);
                $services = $data['success']['data'];
                return view('backend.services.view', compact('services',  'request'));
            }catch (ClientException $e){
                return view ('backend.errors.error', ['code' => ($e->getCode() == '0' ? '000' : $e->getCode()), 'message' => $e->getMessage()]);
            }
        } catch (\Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function update(Request $request){
        try{
            if($request->getMethod() == "POST"){
                $client = new Client();
                $headers_arr = get_access_token();
                try {
                    $response = $client->request('POST', CT::baseURL . '/misc/update-service', [
                        'headers' => $headers_arr,
                        'form_params' => [
                            'service_id' => decrypt($request->service_id),
                            'title' => $request->title,
                            'excerpt' => $request->excerpt,
                            'img' => $request->img,
                            'description' => $request->description
                        ]
                    ]);
                    $result = $response->getBody()->getContents();
                    $data = json_decode($result, true);
                    $services = $data['success']['data'];
                    return view('backend.services.edit',['service_data' => $services]);
                }catch (ClientException $e){
                    return view ('backend.errors.error', ['code' => ($e->getCode() == '0' ? '000' : $e->getCode()), 'message' => $e->getMessage()]);
                }
            }else{
                $client = new Client();
                $headers_arr = get_access_token();
                try {
                    $response = $client->request('POST', CT::baseURL . '/misc/update-service', [
                        'headers' => $headers_arr,
                        'form_params' => [
                            'service_id' => decrypt($request->service_id),
                            'title' => $request->title,
                        ]
                    ]);
                    $result = $response->getBody()->getContents();
                    $data = json_decode($result, true);
                    $services = $data['success']['data'];
                    return view('backend.services.edit',['service_data' => $services]);
                }catch (ClientException $e){
                    return view ('backend.errors.error', ['code' => ($e->getCode() == '0' ? '000' : $e->getCode()), 'message' => $e->getMessage()]);
                }
            }
        }catch (ClientException $e){
            return view ('backend.errors.error', ['code' => ($e->getCode() == '0' ? '000' : $e->getCode()), 'message' => $e->getMessage()]);
        }
    }

    public function delete(Request $request){
        try{
            $client = new Client();
            $headers_arr = get_access_token();
            $response = $client->request('POST', CT::baseURL.'/misc/delete-service',[
               'headers' => $headers_arr,
               'form_params'=>[
                   'service_id' => decrypt($request->service_id),
               ]
            ]);
            $result = $response->getBody()->getContents();
            $data = json_decode($result, true);
            $services = $data['success']['msg'];
            return redirect(route('aServiceV', ['msg' => $services]));
        }catch (ClientException $e){
            return view ('backend.errors.error', ['code' => ($e->getCode() == '0' ? '000' : $e->getCode()), 'message' => $e->getMessage()]);
        }
    }
}

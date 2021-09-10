<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\ClientException;
use Exception;
use Illuminate\Http\Request, Illuminate\Routing\Route;
use App\Constants\Constant as CT;
use GuzzleHttp\Client;

class CMSController extends Controller
{
    public function createCMS(Request $request)
    {
        try {
            if ($request->getMethod() == 'POST') {
                $client = new Client();
                $headers_arr = get_access_token();
                    $form_params = [
                        'headers' => $headers_arr,
                        'form_params' => [
                            'site_title' => $request->site_title,
                            'logo' => $request->logo,
                            'meta_title' => $request->meta_title,
                            'meta_description' => $request->meta_description,
                            'facebool_url' => $request->fb_url,
                            'twitter_url' => $request->tw_url,
                            'linkedin_url' => $request->ln_url,
                            'youtube_url' => $request->yt_url,
                            'instagram_url' => $request->inst_url,
                            'video_url' => $request->video_url,
                            'contact_url' => $request->cntct_url,
                            'contact_email'=>$request->cntct_email,
                            'contact_number'=>$request->cntct_number,
                            'contact_address'=>$request->cntct_address,
                            'slider_images' => $request->slider_images,
                            'slider_titles' => $request->slider_titles,
                            'slider_descriptions' => $request->slider_descriptions,
                        ]
                    ];
                    $response = $client->request('POST', CT::baseURL . '/misc/create-cms', $form_params);
                    $result = $response->getBody()->getContents();
                    $data = json_decode($result);
                    return view('backend.CMS.create', ['cms_response' => $data]);
            }
            return view('backend.CMS.create');
        } catch (Exception $e) {
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

    public function viewCMS(Request $request){
        try {
            $client = new Client();
            $headers_arr = get_access_token();
            try{
                $response = $client->request('GET', CT::baseURL.'/misc/get-cms',[
                   'headers' => $headers_arr
                ]);
                $result = $response->getBody()->getContents();
                $data = json_decode($result, true);
                $res = $data['success']['data'];
                return view('backend.CMS.view',['cms_data' => $res]);
            }catch (ClientException $e){

                return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
            }
        }
        catch (ClientException $e){
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }

//    CMS Update Function
    public function updateCMS(Request $request){
        try{
            if($request->getMethod() == "POST") {
                $client = new Client();
                $headers_arr = get_access_token();
                try {
                    $from_params = [
                        'headers' => $headers_arr,
                        'form_params' => [
                            'cms_id' => decrypt($request->cms_id),
                            'site_title' => $request->site_title,
                            'logo' => $request->logo,
                            'meta_title' => $request->meta_title,
                            'meta_description' => $request->meta_description,
                            'facebool_url' => $request->fb_url,
                            'twitter_url' => $request->tw_url,
                            'linkedin_url' => $request->ln_url,
                            'youtube_url' => $request->yt_url,
                            'instagram_url' => $request->inst_url,
                            'video_url' => $request->video_url,
                            'contact_url' => $request->cntct_url,
                            'contact_email'=>$request->cntct_email,
                            'contact_number'=>$request->cntct_number,
                            'contact_address'=>$request->cntct_address,
                            'slider_images' => $request->slider_images,
                            'slider_titles' => $request->slider_titles,
                            'slider_descriptions' => $request->slider_descriptions,
                        ]
                    ];
                    $response = $client->request('POST', CT::baseURL . '/misc/update-cms', $from_params);
                    $result = $response->getBody()->getContents();
                    $data = json_decode($result, true);
                    $cms_data = $data['success']['data'];
                    return view('backend.CMS.view',['cms_data' => $cms_data]);
                } catch (ClientException $e) {
                    return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
                }
            }else{
                $client = new Client();
                $headers_arr = get_access_token();
                $response = $client->request('GET', CT::baseURL.'/misc/get-cms',[
                    'headers' => $headers_arr
                ]);
                $result = $response->getBody()->getContents();
                $data = json_decode($result, true);
                $res = $data['success']['data'];
                return view('backend.CMS.edit',['cms_data' => $res]);
            }
        }
        catch (ClientException $e){
            return view('backend.errors.error', ['code' => $e->getCode() == 0 ? '000' : $e->getCode(), 'message' => $e->getMessage()]);
        }
    }
}

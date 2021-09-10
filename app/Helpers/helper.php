<?php

use App\Classes\JWToken as JWT;
use Lindelius\JWT\Exception\ExpiredJwtException;
use Lindelius\JWT\Exception\InvalidJwtException;
use Lindelius\JWT\Exception\JwtException;
use App\Constants\API\Constant;
use Illuminate\Support\Str;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Constants\API\Messages as Msg, App\Constants\API\ErrorCodes as EC;
use GuzzleHttp\Client;
use App\Constants\Constant as CT;


if (!function_exists('validatorMessages')) {
    function validatorMessages($validator, $msgArr = [])
    {
        foreach ($msgArr as $k => $v) $validator->errors()->add($k, $v);
        return $validator;
    }
}

if (!function_exists('hmac')) {
    function hmac($str)
    {
        return hash_hmac('md5', $str, 'secret');
    }
}

if (!function_exists('exceptionPage')) {
    function exceptionPage($errorCode = 404, $errorMsg = 'Oops! Sorry, that page could\'nt be found.')
    {
        if ($errorCode == 0)
            $errorCode = 404;
        return view('backend.errors.error')->with(compact('errorCode', 'errorMsg'));
    }
}

if (!function_exists('uniqidReal')) {
    function uniqidReal($lenght = 13)
    {
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }
}

if (!function_exists('__set')) {
    function __set($n, $v)
    {
        $GLOBALS[$n] = $v;
    }
}

if (!function_exists('__get')) {
    function __get($n)
    {
        return $GLOBALS[$n];
    }
}

if (!function_exists('queryLogEnabale')) {
    function queryLogEnabale()
    {
        \DB::enableQueryLog();
    }
}

if (!function_exists('displayLastQuery')) {
    function displayLastQuery()
    {
        queryLogEnabale();
        print_r(\DB::getQueryLog());
    }
}

if (!function_exists('getCurrRouteName')) {
    function getCurrRouteName()
    {
        return \Route::currentRouteName();
    }
}

if (!function_exists('publicPath')) {
    function publicPath($folder = '')
    {
        $path = str_replace('project/', '', public_path());
        return str_replace('project\\', '', $path) . $folder;
    }
}

if (!function_exists('csvToArray')) {
    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header) $header = $row;
                else $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
}

if (!function_exists('inArrAssociative')) {
    function inArrAssociative($key, $val, $arr)
    {
        foreach ($arr as $k => $v) {
            if ($v[$key] == $val) {
                return true;
                break;
            }
        }
        return false;
    }
}

if (!function_exists('moveAttachments')) {
    function moveAttachments($request, $dir)
    {
        if (!\File::isDirectory($dir)) \File::makeDirectory($dir, 0755, true, true); // create directory
        if (isset($request->attachments) && count($request->attachments) > 0) {
            $file_names = [];
            foreach ($request->attachments as $key => $file) {
                $uuid = uniqidReal();
                $ext = $file->getClientOriginalExtension();
                $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . $uuid . '.' . $ext;
                $file->move($dir, $fileName);
                $file_names[] = $fileName;
            }
            return $file_names;
        }
    }
}

if (!function_exists('get_user_id')) {
    function get_user_id($request)
    {
        if($request->user_id)
            return $user_id = decrypt($request->user_id);
        else {
            $session = session()->get('b_user_data');
            return $session['user_info']['user_id'];
        }

    }
}

if (!function_exists('get_tenant_id')) {
    function get_tenant_id($request)
    {
        if($request->tenant_id)
            return $tenant_id = $request->tenant_id;
        else {
            $session = session()->get('b_user_data');
            return $session['user_info']['tenant_id'];
        }

    }
}

if (!function_exists('get_attr_by_enc_dec')) {
    function get_attr_by_enc_dec($attr)
    {
        try {
            return decrypt($attr);
        } catch (\Exception $e) {
            return $attr;
        }
    }
}

if (!function_exists('removeRequest')) {
    function removeRequest($request, $keys = [])
    {
        if (count($keys)) {
            foreach ($keys as $key) $request->request->remove($key);
        }
    }
}

if (!function_exists('encodeJWT')) {
    function encodeJWT($payloads = [], $validFor = 5, $algo = 'HS256')  # Token Validity Time in Minutes
    {
        $jwt = JWT::create($algo);
        $jwt->other = $payloads;
        $jwt->exp = time() + (60 * $validFor);
        $jwt->nbf = time();
        $jwt->iat = time();
        $jwt->iss = Constant::issuer;
        try {
            return encrypt($jwt->encode(env('JWT_SECRET')));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}

if (!function_exists('decodeJWT')) {
    function decodeJWT($key)
    {
        try {
            $key = decrypt($key);
            $decodeKey = JWT::decode($key);
        } catch (DecryptException $e) {
            return Msg::gnl[EC::Conflict];
        } catch (JwtException $e) {
            return $e->getMessage();
        } catch (\Exception $e) {
            return false;
        }
        try {
            $decodedKey = $decodeKey->verify(env('JWT_SECRET'));
            if ($decodedKey == true)
                return $decodeKey;
        } catch (ExpiredJwtException $e) {
            return str_replace(['The', 'JWT', '.'], ['', 'Access Token', ''], $e->getMessage());
        } catch (InvalidJwtException $e) {
            return str_replace(['JWT'], ['Access Token'], $e->getMessage());
        } catch (\Exception $e) {
            return false;
        }

    }
}

if (!function_exists('responseJson')) {
    function responseJson($data = [], $status_code = 200, $request = '')
    {
        if ($request->password) $request->request->add(['password' => 'XXXXXX']);
        if ($status_code != 200) \Log::info($request->path(), ['Request' => $request->all(), 'Response' => $data, 'status_code' => $status_code]);
        else \Log::error($request->path(), ['Request' => $request->all(), 'Response' => $data, 'status_code' => $status_code]);
        return response()->json($data, $status_code);
    }
}

if (!function_exists('is_api')) {
    function is_api()
    {
        if (request()->is('api/*')) return true;
        return false;
    }
}

if (!function_exists('encodeActivation')) {
    function encodeActivation(string $key)
    {
        $encKey = $key;
        for ($i = 0; $i < 5; $i++) $encKey = encrypt($encKey);
        return $encKey;
    }
}

if (!function_exists('decodeActivation')) {
    function decodeActivation(string $key)
    {
        $decKey = $key;
        for ($i = 0; $i < 5; $i++) $decKey = decrypt($decKey);
        return $decKey;
    }
}

if (!function_exists('upload_base64_img')) {
    function upload_base64_img($img, $dir)
    {
        try {
            $img_url = "img-".(string) Str::uuid().".png";
            $path = public_path() . $dir;
            $directory = realpath($path);
            if($directory === false && !is_dir($directory))// If not exist, check if not it's a directory
                mkdir($path, 0755, true);
            $path = $path .'/'. $img_url;
            $img = substr($img, strpos($img, ",")+1);
            $data = base64_decode($img);
            file_put_contents($path, $data);
            return $img_url;
        } catch (\Exception $e) {
            return false;
        }

    }
}

if (!function_exists('unlink_file')) {
    function unlink_file($dir, $file)
    {
        try {
            $path = public_path() . $dir;
            $path = $path .'/'. $file;
            return unlink($path);
        } catch (\Exception $e) {
            return false;
        }

    }
}

// Exception for 404 Front End
if (!function_exists('exceptionPageError')) {
    function exceptionPageError($code = 404, $message = 'Oops! Sorry, that page could\'nt be found.')
    {
        if ($code == 0)
            $code = 404;
        return view('frontend.errors.error')->with(compact('code', 'message'));
    }
}
//Access Token Function
if (!function_exists('get_access_token')){
    function get_access_token($username = 'itambassadorz', $password = '4501937')
    {
        $client = new Client();
//        dd($client);
        $response = $client->request('POST', CT::baseURL.'/user/login', [
            'form_params' => [
                'username' => $username,
                'password' => $password
            ]
        ]);
        $result = $response->getBody()->getContents();
        $data = json_decode($result, true);
        $access_token = $data['success']['data']['access_token'];
//                dd($access_token);
        $headers = ['Authorization' => $access_token];

        return $headers;

    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function send_firebase_order_notification($token , $Message){
        $data['deviceToken'] = $token;
        $data['title'] = "Matrimonial";
        $data['body'] = $Message;
        $data['image'] = '';
        $this->fireBaseNotifications($data);
        return true;
    }

    public function fireBaseNotifications( $data = [] )
    {
        $token = $data['deviceToken'];
        $from = "AAAAc4cwCLs:APA91bFeGBDdD7n4Np72X9BJWD7mF-t90_dKP7QcLWp44-OIcvNzhLxITaeiVeafuET-qGp8WRjRzQx1bMYHGr0TpQgcDDoxqv614VJpR_HBqWhwe8GxVemMUTIUMUm45kIV0BAYosQ4";
        $msg = array
        (
            'body'  => $data['body'],
            'title' => $data['title'],
            'image' => $data['image'],
            'receiver' => 'erw',
            'icon'  => "https://image.flaticon.com/icons/png/512/270/270014.png",/*Default Icon*/
            'sound' => 'mySound'/*Default sound*/
        );

        $fields = array
        (
            'to'        => $token,
            'notification'  => $msg
        );

        $headers = array
        (
            'Authorization: key=' . $from,
            'Content-Type: application/json'
        );
        //#Send Reponse To FireBase Server
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        curl_exec($ch );
        curl_close( $ch );
        return true;
    }

}

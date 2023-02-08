<?php

namespace App\Http\Middleware;

use App\Models\Seting;

class SeoPush
{
    public function Baidu($link){
        $site = Seting::where('name','site')->first();
        $site = json_decode($site->value);


        $urls = array($link);
        $api = $site->baidu_ts_api;
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL => $api,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);

        return $result;
    }
}

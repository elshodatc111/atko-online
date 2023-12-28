<?php
function sendSMS($phone,$text){
    $curl = curl_init();
    $sms = [
        [
            'phone' => $phone,
            'text'  => $text,
        ]
    ];
    $data = 'login='.urlencode('###');
    $data .= '&password='.urlencode('###');
    if (isset($nickname)) {
        $data .= '&nickname='.urlencode($nickname);
    }
    $data .= '&data='.urlencode(json_encode($sms));
    curl_setopt($curl, CURLOPT_URL, 'http://185.8.212.184/smsgateway/');
    curl_setopt($curl, CURLOPT_HEADER, 0); 
    curl_setopt($curl, CURLOPT_POST, 1); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5); 
    curl_setopt($curl, CURLOPT_TIMEOUT, 5); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); 
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data); 
    curl_setopt($curl, CURLOPT_USERAGENT, 'Opera 10.00'); 
    $res = curl_exec($curl); 
    curl_close($curl);
}
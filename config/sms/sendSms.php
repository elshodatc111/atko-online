<?php
    function sendMessge($phone,$text){
        $data = json_encode([
            'send'=>'',
            'number'=>$phone,
            'text'=>$text,
            'user_id'=>'5139864291',
            'token'=>"emNlVoGxdivUfMjAKYXPIORyDFLkqtSsnEZHarTQuBhbJgp",
            'id'=>'5390'
        ]);
        $url = "https://api.xssh.uz/smsv1/?data=".urlencode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $res = curl_exec($ch);
        $smsArray = json_decode($res, true);
        print_r($smsArray);
    }
?>
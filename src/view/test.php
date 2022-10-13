<?php
//액세스 토큰 발급
$url = "https://api.instagram.com/oauth/access_token";
$post_array = array(
    'client_id'=>'522600873208568',
    'client_secret'=>'161a8c07c5347677cfe5afb1c7a8359b',
    'grant_type'=>'authorization_code',
    'redirect_uri'=>'https://ymillonga.xyz/user/facebook/callback',
    'code'=>'AQC_dvSU_bUYQHTy8KJ-vXGDS4Rvm40dMDDiW87BHOnoH0sQmoF6pY2suPbFYOayhE0YhrvrYckZ9uR0jY6o4DoZYlq8fggc6s8Pr7xMLBaM2j61BGJMZYqOfvR4f8snGxxQvP6i3R2ENRFgIvJFo44CP7wMxpe_FdM9RvD-0luykHXavrctfyPm2fE7we636EWt3WKQmyZbaXCDT_j5Co9PSWh_OyWnaM2dMmnsTeOIag'
);
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST,true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_array);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result,true);
print_r($result);
?>
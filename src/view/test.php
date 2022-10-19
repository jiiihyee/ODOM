<?php
//액세스 토큰 발급
$url = "https://api.instagram.com/oauth/access_token";
$post_array = array(
    'client_id'=>'1179998542867267',
    'client_secret'=>'c808c1a7d622e6ae7c6b9f3fd1c580a9',
    'grant_type'=>'authorization_code',
    'redirect_uri'=>'https://ymillonga.xyz/user/facebook/callback',
    'code'=>'AQDq3euJEMs2f2_BSHibTYmyp10xgiDE8weuRkF_Q1924Tz3NEXqwBvYHJnvfsvcLpMfkI-_HPSYz4eE8kojV69JdUY2w-qN19QiGje1Gr0HGU9hdE2sKhVmRKzV0aFH4bl2xhW8JA3KrxyBS-avp3DvBWh0L2Xk-wugdq_fL4BZFx3F8BRALYteaNfXSEt4RwLWYtUeGzsmdqTMy6ByWcWMJA5y-2oq9pel-GAxrAyZ-w'
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
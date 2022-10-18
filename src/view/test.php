<?php
//액세스 토큰 발급
$url = "https://api.instagram.com/oauth/access_token";
$post_array = array(
    'client_id'=>'1179998542867267',
    'client_secret'=>'c808c1a7d622e6ae7c6b9f3fd1c580a9',
    'grant_type'=>'authorization_code',
    'redirect_uri'=>'https://ymillonga.xyz/user/facebook/callback',
    'code'=>'AQCMBiFSqe_wQb3AC_xySrkKWg588cmxgxWLf1fOuqL5kbP9uiVrnUWqOTzIsEKg24Xa3LGnWNfmFQp8jOuWNjKmZQlUouZ1bsrjIaXido2mCNgkJrhSdnsDmgjrLMWeoH6StzzFZDrxq-kQUJQCFnZ7EToT53RUDzwe9Tby-DUbiVHMOESCV9IoZscEoG9rwegQ5qWGKGsjePZFt8gfMEwXrsRBVyKuuGgSQdP9CiwipA'
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
<style>
.my_instagram {list-style:none; padding:0; margin:0; display:block;}
.my_instagram li {float:left; width:20%;}
.my_instagram li img {max-width:100%;}
.my_instagram li a {display:block;}
</style>
<?php
// 입력하는 값 앞뒤에 공백 없게 주의해주세요
$url = "https://graph.instagram.com/17841450481745795/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJVQldvLXhyZA2NkODV4bTFJemcwRURISjZAJYlhXQlprRFFOY2lvV0dNYVZAMU0ZArU0hVVGpITFRFSGloZAVZAMWHNtTzVJb2NBdENzUHQydEdaNWhfajhnUXA2TE9hbkdDdXktTXhjMEF1OWRqejItWmxyMGplTGs4SWdN";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result,true);
$result=$result['data'];
?>
<ul class="my_instagram">
	<?php for($i=0; $i<count($result); $i++){ ?>
	<li><a href="<?php echo $result[$i]['permalink']; ?>" target="_blank"><img src="<?php echo $result[$i]['media_url']; ?>">
	<?php echo $result[$i]['caption']; ?></a></li>
	<?php } ?>
<ul>
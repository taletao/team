<?php
header("content-type:text/html;charset=utf-8");

$url1 = 'http://api.lehuolh.com/index.php?m=1';
$data1 = json_decode(curlGet($url1), true);
$url2 = 'http://api.lehuolh.com/index.php?m=2';
$data2 = json_decode(curlGet($url2), true);
$url3 = 'http://api.lehuolh.com/index.php?m=3';
$data3 = json_decode(curlGet($url3), true);
$url4 = 'http://api.lehuolh.com/index.php?m=4';
$data4 = json_decode(curlGet($url4), true);
$url5 = 'http://api.lehuolh.com/index.php?m=5';
$data5 = json_decode(curlGet($url5), true);
$url6 = 'http://api.lehuolh.com/index.php?m=6';
$data6 = json_decode(curlGet($url6), true);
$url7 = 'http://api.lehuolh.com/index.php?m=7';
$data7 = json_decode(curlGet($url7), true);

echo '</br>实例(模式一):</br>'.$data3['domain']."/shop/1/?t=".time()."&u=1000";
echo '</br>实例(模式二):</br>'.$data4['domain']."/copy/1/?t=".time()."&u=1000";
echo '</br>实例(模式三):</br>'.$data5['domain']."/jump/1/?t=".time()."&u=1000";
echo '</br>实例(模式四/强制分享/跳转下单):</br>'.$data1['domain']."/?s=1&t=".time()."&u=1000";
echo '</br>实例(模式四/强制分享/分享群或好友三):</br>'.$data2['domain']."/?s=1&t=".time()."&u=1000";
echo '</br>实例(模式五):</br>'.$data6['domain']."/copy5/1/?t=".time()."&u=1000";
echo '</br>实例(模式六):</br>'.$data7['domain']."/copy6/1/?t=".time()."&u=1000";
echo '</br>其中1是商品ID，1000是用户ID，';

function curlGet($url,$params = '') {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$params);
	curl_setopt($ch, CURLOPT_TIMEOUT,3);
	$data = curl_exec($ch);
	curl_close ($ch);
	return $data;
}





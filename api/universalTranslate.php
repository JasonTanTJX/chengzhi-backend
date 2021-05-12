<?php


$translateURL = 'http://api.fanyi.baidu.com/api/trans/vip/translate';
$postData['q'] = $_POST['q'];
$postData['from'] = 'auto';
$postData['to'] = 'zh';
$postData['appid'] = '20200223000387500';
$postData['salt'] = rand();
$postData['sign'] = md5($postData['appid'].$postData['q'].$postData['salt'].'FjVhXBumExHLyKOhZg2X');


 $result = HttpPostCookie($translateURL,$postData);
echo $result;








	function HttpPostCookie($url, $data,$timeout = 60)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
?>
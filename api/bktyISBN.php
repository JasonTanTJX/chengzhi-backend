<?php
$ISBN = $_POST["ISBN"];
// $keyword = $_GET["keyword"];
$url = 'http://61.181.145.2/api/book/isbn2info2.php?ISBN='.$ISBN;
$ch  = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  //返回数据不直接输出
curl_setopt($ch, CURLOPT_NOSIGNAL,1);
curl_setopt($ch, CURLOPT_TIMEOUT_MS,5000);
curl_setopt($ch, CURLOPT_HEADER, 0);
$JsonOut = curl_exec($ch);
$curl_errno = curl_errno($ch);
curl_close($ch);
if($curl_errno >0){
            echo '{"0":{"0":"图书馆系统无响应"}}';
            exit();
        }
echo $JsonOut;
?>
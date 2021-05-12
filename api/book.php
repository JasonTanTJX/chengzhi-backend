<?php
        $ISBN = $_POST["ISBN"];
        $ch = curl_init();
	    $url = "http://api.xiaomafeixiang.com/api/bookinfo?isbn=".$ISBN;
	    $headers[] = "content-type: application/x-www-form-urlencoded";
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);//设置请求头
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	    curl_setopt($ch, CURLOPT_NOBODY, false);
	    curl_setopt($ch, CURLOPT_HEADER, false);
        $contents = curl_exec($ch);
        $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
        curl_close($ch);
        echo($contents);
?>
<?php

$czid = mt_rand(1,100000)*date("Y")*date("m")*date("d");
$openid = $_POST['openid'];
$nickName = $_POST['nickName'];
$avatarUrl = $_POST['avatarUrl'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$province = $_POST['province'];
$city = $_POST['city'];
$signTime = date("Y-m-d H:i:s");
$servername = "localhost";
$username = "chengzhi";
$password = "tjxchengzhi1027";
$dbname = "chengzhi";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "INSERT INTO usersInfo (czid,openid,nickName,avatarUrl,gender,country,province,city,signTime)
VALUES ('".$czid."', '".$openid."','".$nickName."','".$avatarUrl."', '".$gender."','".$country."','".$province."','".$city."','".$signTime."')";
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
    echo $sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>
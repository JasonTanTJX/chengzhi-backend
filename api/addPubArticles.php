<?php
$openid = $_POST['openid'];
$avatarUrl = $_POST['avatarUrl'];
$nickName = $_POST['nickName'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$province = $_POST['province'];
$city = $_POST['city'];
$imgList = $_POST['imgList'];
$sendTime = date("Y-m-d H:i:s");
$content_id = mt_rand(1,100000)*date("i")*date("s");
$comment_id = $_POST['comment_id'];;
$content = $_POST['content'];
$encode = base64_encode($content);
$locName = $_POST['locName'];
$open = $_POST['open'];

$servername = "localhost";
$username = "chengzhi";
$password = "tjxchengzhi1027";
$dbname = "chengzhi";

// echo($content_id);die;
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "INSERT INTO pubArticles (openid, avatarUrl,nickName,gender,country,province,city,sendTime,content,locName,open,imgList,content_id,comment_id)
VALUES ('".$openid."', '".$avatarUrl."','".$nickName."', '".$gender."','".$country."', '".$province."','".$city."', '".$sendTime."','".$encode."', '".$locName."','".$open."','".$imgList."','".$content_id."','".$comment_id."')";
 
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
    echo $sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>
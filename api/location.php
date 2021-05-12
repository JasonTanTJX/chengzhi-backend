<?php


$nickName = $_POST['nickName'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$province = $_POST['province'];
$city = $_POST['city'];
$district = $_POST['district'];
$township = $_POST['township'];
$streetNumDirection = $_POST['streetNumDirection'];
$streetNumDistance = $_POST['streetNumDistance'];
$streetNumLocation = $_POST['streetNumLocation'];
$streetNumber = $_POST['streetNumber'];
$street = $_POST['street'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$locTime = date("Y-m-d H:i:s");
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
 
$sql = "INSERT INTO location (nickName,gender,country,province,city,district,township,streetNumDirection,streetNumDistance,streetNumLocation,streetNumber,street,latitude,longitude,name,`desc`,locTime)
VALUES ('".$nickName."','".$gender."','".$country."','".$province."','".$city."','".$district."','".$township."','".$streetNumDirection."','".$streetNumDistance."','".$streetNumLocation."','".$streetNumber."','".$street."','".$latitude."','".$longitude."','".$name."','".$desc."','".$locTime."')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
    echo $sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 
$conn->close();
?>
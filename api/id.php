<?php
// $allowedExts = array("gif", "jpeg", "jpg", "png");
// $temp = explode(".", $_FILES["file"]["name"]);
$openid = $_POST['openid'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$id = $_POST['id'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$valid_date = $_POST['valid_date'];
$recentAltTime = date("Y-m-d H:i:s");

$servername = "localhost";
$username = "chengzhi";
$password = "tjxchengzhi1027";
$dbname = "chengzhi";


// $extension = end($temp);     // 获取文件后缀名
// if ((($_FILES["file"]["type"] == "image/gif")
// || ($_FILES["file"]["type"] == "image/jpeg")
// || ($_FILES["file"]["type"] == "image/jpg")
// || ($_FILES["file"]["type"] == "image/pjpeg")
// || ($_FILES["file"]["type"] == "image/x-png")
// || ($_FILES["file"]["type"] == "image/png"))
// && ($_FILES["file"]["size"] < 20480000)   // 小于 20000 kb
// && in_array($extension, $allowedExts))
// {
//     if ($_FILES["file"]["error"] > 0)
//     {
//         echo "错误：: " . $_FILES["file"]["error"] . "<br>";
//     }
//     else
//     {
//         // echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
//         // echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
//         // echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
//         // echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
        
//         // 判断当前目录下的 upload 目录是否存在该文件
//         // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
//         if (file_exists("idcard/" . $_FILES["file"]["name"]))
//         {
//             echo $_FILES["file"]["name"] . " 文件已经存在。 ";
//         }
//         else
//         {
//             // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
//             move_uploaded_file($_FILES["file"]["tmp_name"], "idcard/" . $_FILES["file"]["name"]);
//             $idcardFile = "https://images.t0k.xyz/" ."idcard/" . $_FILES["file"]["name"];
//             echo "图片路径: ".$idcardFile;
//             // echo "文件存储在: " . "idcard/" . $_FILES["file"]["name"]. "<br>";
//         }
//     }
// }
// else
// {
//     echo "非法的文件格式或未上传文件";
// }


// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "UPDATE `usersInfo` SET `name` = '".$name."',`rewardPoints` = `rewardPoints`+100,`gender` = '".$gender."',`nationality` = '".$nationality."',`id` = '".$id."',`birthday` = '".$birthday."',`address` = '".$address."',`valid_date` = '".$valid_date."',`recentAltTime` = '".$recentAltTime."' WHERE `openid` = '".$openid."'";
 
 
if ($conn->query($sql) === TRUE) {
    echo "新记录更新成功！";
    echo $sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
 
?>
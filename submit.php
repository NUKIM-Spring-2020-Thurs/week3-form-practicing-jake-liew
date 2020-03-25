<meta charset="utf-8">
<?php

$username=$_POST["username"];
$gender=$_POST["gender"];
$birthdate=$_POST["birthdate"];
$id_NO=$_POST["id_NO"];
$phone_NO=$_POST["phone_NO"];
$email=$_POST["email"];
$ziguan=$_POST["ziguan"];
$meal=$_POST["meal"];
$regret=$_POST["regret"];
$describe_yourself=$_POST["describe_yourself"];

echo "您的姓名 :",$username,"<br/>";
echo "您的性別 :",$gender,"<br/>";
echo "出生年月日 :",$birthdate,"<br/>";
echo "身分證字號 : ",$id_NO,"<br/>";
echo "聯絡電話 :",$phone_NO,"<br/>";
echo "信箱 : ",$email,"<br/>";
echo "就讀科系 :",$ziguan,"<br/>";
echo "您的飲食偏好 : ",$meal,"<br/>";
echo "是否有後悔修php?:",$regret,"<br/>";
echo "自我介紹:",nl2br(htmlspecialchars($describe_yourself)),"<br/>";

?>
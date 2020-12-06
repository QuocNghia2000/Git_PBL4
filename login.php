<?php
include_once('dbConnect.php');
   $db = new dbConnect();
  // Mảng JSON
  
  $username=$_POST['username'];
  $password=$_POST['password'];
  $result = mysqli_query($db->link,"SELECT * FROM user WHERE Username='$username'and Password='$password'");
  //Đọc dữ liệu từ MySQL
if(mysqli_num_rows($result)==1)
{
    echo"Ok";
}
else echo "Fail";
?>
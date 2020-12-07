<?php
include_once('dbConnect.php');
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $UserID=$_POST['$UserID'];
  $username=$_POST['username'];
  $pass=$_POST['password'];
  $fullname=$_POST['fullname'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"UPDATE user set Username='$username', Password='$pass',Fullname='$fullname' where UserID=$UserID");
  //Đọc dữ liệu từ MySQL
  if($result)
  {
      echo "Ok";
  }
  else echo "Fail";
 
?>
<?php
include_once('dbConnect.php');
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $username=$_POST['username'];
  $pass=$_POST['password'];
  $fullname=$_POST['fullname'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"INSERT INTO user values(null,'$username','$pass','$fullname')");
  //Đọc dữ liệu từ MySQL
  if($result)
  {
      echo "Ok";
  }
  else echo "Fail";
 
?>
<?php
include_once('dbConnect.php');
 function dispInfo(){
   $db = new dbConnect();
  // Mảng JSON
  $UserID=$_POST['UserID'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"SELECT UserID FROM login WHERE UserID=$UserID");
  if($result!=null)
  {
      echo"Tài khoản đã được đăng nhập";
  }
  //Đọc dữ liệu từ MySQL
}
dispInfo();
?>
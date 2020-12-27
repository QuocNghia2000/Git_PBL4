<?php
include_once('dbConnect.php');
 function dispInfo(){
   $db = new dbConnect();
  // Mảng JSON
  $UserID=$_POST['UserID'];
  $ToUserID=$_POST['ToUserID'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"DELETE FROM message WHERE (UserID=$UserID and ToUserID=$ToUserID) or(UserID=$ToUserID and ToUserID=$UserID)");
  if($result!=null)
  {
      echo"Oke";
  }
  //Đọc dữ liệu từ MySQL
}
dispInfo();
?>
<?php
include_once('dbConnect.php');
 function dispInfo(){
   $db = new dbConnect();
  // Mảng JSON
  $UserID=$_POST['UserID'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"DELETE FROM login WHERE UserID=$UserID");
  if($result!=null)
  {
      echo"Oke";
  }
  //Đọc dữ liệu từ MySQL
}
dispInfo();
?>
<?php
include_once('dbConnect.php');
 function dispInfo(){
   $db = new dbConnect();
  // Mảng JSON
  $MessageID=$_POST['MessageID'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"DELETE FROM message WHERE MessageID=$MessageID");
  if($result!=null)
  {
      echo"Oke";
  }
  //Đọc dữ liệu từ MySQL
}
dispInfo();
?>
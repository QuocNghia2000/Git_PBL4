<?php
include_once('dbConnect.php');
 function dispInfo(){
   $db = new dbConnect();
  // Mảng JSON
  $IDwork=$_POST['IDwork'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"DELETE FROM work WHERE IDwork=$IDwork");
  if($result!=null)
  {
      echo"Oke";
  }
  //Đọc dữ liệu từ MySQL
}
dispInfo();
?>
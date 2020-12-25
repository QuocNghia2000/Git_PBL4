<?php
include_once('dbConnect.php');
   $db = new dbConnect();
  // Mảng JSON
  $Namework=$_POST['Name_work'];
  $IDwork=$_POST['IDwork'];
  $Detail_work=$_POST['Detail_work'];
  $Time=$_POST['Time'];
  $status=$_POST['status'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"UPDATE work set Namework='$Namework',Detail_work='$Detail_work',
   Time='$Time',status=$status where IDwork=$IDwork");
  //Đọc dữ liệu từ MySQL
  if($result)
  {
      echo "Oke";
  }
 
?>
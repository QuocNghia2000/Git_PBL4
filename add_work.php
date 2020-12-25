<?php
include_once('dbConnect.php');
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $Namework=$_POST['Namework'];
  $UserID=$_POST['UserID'];
  $Detail_work=$_POST['Detail_work'];
  $Time=$_POST['Time'];
  $status=$_POST['status'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"INSERT INTO work values(null,$UserID,'$Namework','$Detail_work','$Time',$status)");
  //Đọc dữ liệu từ MySQL
  if($result)
  {
        echo "Oke";
  }
?>
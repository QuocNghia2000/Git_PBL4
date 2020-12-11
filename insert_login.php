<?php
include_once('dbConnect.php');
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $IDLogin=$_POST['IDLogin'];
  $UserID=$_POST['UserID'];
  // Câu lệnh Select dùng để xem dữ liệu
    $result = mysqli_query($db->link,"INSERT INTO login values(null,$UserID)");
  //Đọc dữ liệu từ MySQL
  if(!$result)
  {
        echo "Fail";
  }
?>
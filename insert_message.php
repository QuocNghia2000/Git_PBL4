<?php
include_once('dbConnect.php');
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $Text=$_POST['Text'];
  $UserID=$_POST['UserID'];
  $ToUserID=$_POST['ToUserID'];
  $Time=$_POST['Time'];
  $RoomID=$_POST['RoomID'];
  // Câu lệnh Select dùng để xem dữ liệu
    $result = mysqli_query($db->link,"INSERT INTO message values(null,$RoomID,$UserID,$ToUserID,'$Text','$Time')");
  //Đọc dữ liệu từ MySQL
  if(!$result)
  {
        echo "Fail";
  }
?>
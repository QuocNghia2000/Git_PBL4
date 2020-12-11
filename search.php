<?php
include_once('dbConnect.php');
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $response["user"] = array();
  $UserID=$_POST['UserID'];
  $fullname=$_POST['fullname'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"SELECT Fullname FROM user  where Fullname LIKE '%$fullname%' and not UserID=$UserID");
  //Đọc dữ liệu từ MySQL
  while($row = mysqli_fetch_array($result)){
    $t = array();
    $t["Fullname"] = $row["Fullname"];
    // Mảng JSON
    array_push($response["user"], $t);
 }
 echo json_encode($response);
 
?>
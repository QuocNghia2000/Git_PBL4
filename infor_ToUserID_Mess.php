<?php
include_once('dbConnect.php');
 function dispInfo(){
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $response["user"] = array();
  $userID=$_POST[''];
  // Câu lệnh Select dùng để xem dữ liệu
  if($userID!=null)
  {
    $result = mysqli_query($db->link,"SELECT * FROM user where UserID=$userID");
  }
  else
  {
    $result = mysqli_query($db->link,"SELECT * FROM user");
  }
  //Đọc dữ liệu từ MySQL
  while($row = mysqli_fetch_array($result)){
    $t = array();
    $t["UserID"] = $row["UserID"];
    $t["Username"] = $row["Username"];
    $t["Password"] = $row["Password"];
    $t["Fullname"] = $row["Fullname"];
    // Mảng JSON
    array_push($response["user"], $t);
 }
 echo json_encode($response);
}
dispInfo();
?>
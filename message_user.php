<?php
include_once('dbConnect.php');
 function dispInfo(){
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $response["message"] = array();
  $userID=$_POST['UserID'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"(SELECT ToUserID FROM message WHERE UserID = $userID)
   UNION (SELECT UserID FROM message WHERE ToUserID = $userID)");
  //Đọc dữ liệu từ MySQL
  while($row = mysqli_fetch_array($result)){
    $t = array();
    $t["ToUserID"] = $row["ToUserID"];
    // Mảng JSON
    array_push($response["message"], $t);
 }
 echo json_encode($response);
}
dispInfo();
?>
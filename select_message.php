<?php
include_once('dbConnect.php');
 function dispInfo(){
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $response["message"] = array();
  $UserID=$_POST['UserID'];
  $ToUserID=$_POST['ToUserID'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"SELECT * FROM message WHERE (UserID=$UserID and ToUserID=$ToUserID) or(UserID=$ToUserID and ToUserID=$UserID)");
  //Đọc dữ liệu từ MySQL
  while($row = mysqli_fetch_array($result)){
    $t = array();
    $t["MessageID"] = $row["MessageID"];
    $t["RoomID"] = $row["RoomID"];
    $t["UserID"] = $row["UserID"];
    $t["ToUserID"] = $row["ToUserID"];
    $t["Text"] = $row["Text"];
    $t["Time"] = $row["Time"];
    $t["IsImage"] = $row["IsImage"];
    // Mảng JSON
    array_push($response["message"], $t);
 }
 echo json_encode($response);
}
dispInfo();
?>
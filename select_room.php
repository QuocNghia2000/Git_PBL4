<?php
include_once('dbConnect.php');
 function dispInfo(){
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $response["room"] = array();
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"SELECT * FROM room");
  //Đọc dữ liệu từ MySQL
  while($row = mysqli_fetch_array($result)){
    $t = array();
    $t["RoomID"] = $row["RoomID"];
    $t["RoomName"] = $row["RoomName"];
    // Mảng JSON
    array_push($response["room"], $t);
 }
 echo json_encode($response);
}
dispInfo();
?>
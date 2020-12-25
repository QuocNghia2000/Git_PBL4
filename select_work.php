<?php
include_once('dbConnect.php');
 function dispInfo(){
   $db = new dbConnect();
  // Mảng JSON
  $response = array();
  $response["work"] = array();
  $UserID=$_POST['UserID'];
  // Câu lệnh Select dùng để xem dữ liệu
  $result = mysqli_query($db->link,"SELECT * FROM work WHERE UserID=$UserID");
  //Đọc dữ liệu từ MySQL
  while($row = mysqli_fetch_array($result)){
    $t = array();
    $t["IDwork"] = $row["IDwork"];
    $t["UserID"] = $row["UserID"];
    $t["Namework"] = $row["Namework"];
    $t["Detail_work"] = $row["Detail_work"];
    $t["Time"] = $row["Time"];
    $t["status"] = $row["status"];
    // Mảng JSON
    array_push($response["work"], $t);
 }
 echo json_encode($response);
}
dispInfo();
?>
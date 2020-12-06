<?php
class dbConnect {
 public $link;
 // Phương thức khởi tạo
 function __construct() {
   // Kết nối đến database
   $this->connect();
 }
 function __destruct() {
  // Đóng kết nối
  $this->close();
 }
 public function connect()
 {
     $this->link = mysqli_connect("localhost","root","") or die ("Couldn't connect: ");
     mysqli_select_db($this->link,"pbl4");
     return $this->link;
 }
 /**
 * Đóng kết nối
 */
 function close() {
   // Đóng kết nối CSDL
   mysqli_close($this->link);
 }
}
?>
<?php
//$conn = new mysqli("localhost","test","test","test");
$conn = new MongoClient("mongodb://cardbiz:cardbiz98014380@localhost:27017/bezkoder_db?authSource=admin");
 
// Check connection
/*if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
 */

?>

<?php
  //coonection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "procument";

   

    
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
   
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 

?>

</body>
</html>


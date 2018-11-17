<?php

$conn = new mysqli("127.0.0.1", "user", "password", "table", "3306");

if(mysqli_connect_errno($conn)) {
echo "Unable to connect to database server";
}  

$result = mysqli_query($conn,"SELECT code FROM sourcecodes");
while($row = $result->fetch_assoc()) {
    $mydata[] = $row['code'];

}

$result->free();
$conn->close();

 echo "'".implode("','",$mydata)."'";
?>

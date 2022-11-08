
<?php
$servername = "localhost";
$username = "dropship_dropship";
$password = "Developer@254";
$dbname = "dropship_admissions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO  kcpe_stagetwo (applicant_name)
 SELECT applicant_name FROM kcpe_applicants WHERE id = 1";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}









$conn->close();
?>

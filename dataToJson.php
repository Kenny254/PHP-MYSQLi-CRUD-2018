$mydata = array();
while ($row = $result->fetch_assoc()) {
    $mydata[] = $row['code'];
}
$json = json_encode($mydata);
$string = str_replace(array('[', ']'), '', $json);
echo $string;

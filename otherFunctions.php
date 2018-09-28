
$value; //Variable declarations
echo $value;
$value=$row['price']; // Value assignment 
<?php echo substr($row['description'], 0, 100) . '.';?> //string concatination
<a href="single.php?id=<?php $id=$row['id']; echo $id;?>">Read More</a> //Read more button to single detail pages,gets an id and passes it through http

<?php $number = $row['price'];
								// english notation (default)
                $money=$english_format_number = number_format($number);
                echo $money;          
// 1,235 ?>   // Currency place holder.

//Get id value and call related item.

<?php
    // Include the database configuration file
    include 'dbConfig.php';
    
    // Get records from the database
    $id = $_GET['id'];

    $query = $db->query("SELECT * FROM `products`  WHERE id=' $id'");
    
    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
            
    ?>

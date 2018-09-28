
$value; //Variable declarations
$value=$row['price']; // Value assignment 
<?php echo substr($row['description'], 0, 100) . '.';?> //string concatination
<a href="single.php?id=<?php $id=$row['id']; echo $id;?>">Read More</a> //Read more button to single detail pages,gets an id and passes it through http

<?php $number = $row['price'];
								// english notation (default)
                $money=$english_format_number = number_format($number);
                echo $money;          
// 1,235 ?>   // Currency place holder.

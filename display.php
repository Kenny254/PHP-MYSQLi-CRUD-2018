
//SECTION 1
//Authentication and db pointing.

<?php
    // Include the database configuration file
    include 'dbConfig.php';
    
    // Get records from the database
    $query = $db->query("SELECT * FROM `products` WHERE 1");
    
    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
            $postID = $row['id'];
    ?>
    
    
    //SECTION 2
    //Your data to be fetched using the following function.
    
    <?php echo $row['id']; ?>
    <?php echo $row['name']; ?>
    <?php echo $row['email']; ?>
    
    //SECTION 3
    //Closses the loop.
    
    <?php } ?> 
    //can include pagination file here.
    <?php } ?>

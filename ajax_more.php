
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="jquery.loadmore.js"></script> 

</head>
<?php
if(!empty($_POST["id"])){

    // Include the database configuration file
    include 'dbConfig.php';
    
    // Count all records except already displayed
    $query = $db->query("SELECT COUNT(*) as num_rows FROM products WHERE id < ".$_POST['id']." ORDER BY id DESC");
    $row = $query->fetch_assoc();
    $totalRowCount = $row['num_rows'];
    
    $showLimit = 2;
    
    // Get records from the database
    $query = $db->query("SELECT * FROM products WHERE id < ".$_POST['id']." ORDER BY id DESC LIMIT $showLimit");

    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){
            $postID = $row['id'];
    ?>
    <div> <img src="http://admin.store254.co.ke/stock-v2/<?php echo $row['image']; ?>" alt="HTML5 Icon" style="width:200px;height:125px;"> </div>
    <div class="list_item"><?php echo $row['name']; ?></div>
    <div class="list_item">Price:<?php echo $row['price']; ?></div>
    <div class="list_item">Descriptions:<?php echo $row['description']; ?></div>
   <div class="list_item">Availabilty:<?php 
    
                                 $stock=$row['availability']; 
                                    
                                   if($stock =1){   
                                    echo "In Stock";  
                                    }
                                    else
                                    {  
                                     echo "Out Stock";
                                    }
                                   
                                  ?>
    </div>
    <?php } ?>
    <?php if($totalRowCount > $showLimit){ ?>
        <div class="show_more_main" id="show_more_main<?php echo $postID; ?>">
            <span id="<?php echo $postID; ?>" class="show_more" title="Load more posts">Show more</span>
            <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
        </div>
    <?php } ?>
<?php
    }
}
?>

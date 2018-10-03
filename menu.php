<?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('Samsung', 'Sony', 'Lg','Ramtons', 'Mica', 'Von Point', 'Sterling', 'Philips', 'Ampex', 'Generic', 'Hisense');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>

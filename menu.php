                       Fashion-Women
											<li><a href="products.php">Shirts</a></li>
											<li><a href="products.php">Jeans</a></li>
											<li><a href="products.php">Suit</a></li>
											<li><a href="products.php">Blazers</a></li>
											<li><a href="products.php">Mens</a></li>
											<li><a href="products.php">Shoes</a></li>
											<li><a href="products.php">Bottoms</a></li>
                      
                      Fashion-Men
                      <li><a href="products.php">T-Shirts</a></li>
											<li><a href="products.php">Shirts</a></li>
											<li><a href="products.php">Jeans</a></li>
											<li><a href="products.php">Suit</a></li>
											<li><a href="products.php">Blazers</a></li>
											<li><a href="products.php">Mens</a></li>
											<li><a href="products.php">Shoes</a></li>
											<li><a href="products.php">Bottoms</a></li>
                      
                     fashion- Kids
                      <li><a href="products.php">T-Shirts</a></li>
											<li><a href="products.php">Shirts</a></li>
											<li><a href="products.php">Jeans</a></li>
											<li><a href="products.php">Suit</a></li>
											<li><a href="products.php">Blazers</a></li>
											<li><a href="products.php">Mens</a></li>
											<li><a href="products.php">Shoes</a></li>
											<li><a href="products.php">Bottoms</a></li>
                      
                       Electronics-appliances
                      <li><a href="products.php">T-Shirts</a></li>
											<li><a href="products.php">Shirts</a></li>
											<li><a href="products.php">Jeans</a></li>
											<li><a href="products.php">Suit</a></li>
											<li><a href="products.php">Blazers</a></li>
											<li><a href="products.php">Mens</a></li>
											<li><a href="products.php">Shoes</a></li>
											<li><a href="products.php">Bottoms</a></li>
                      
                       Electronics- Computing
                      <li><a href="products.php">T-Shirts</a></li>
											<li><a href="products.php">Shirts</a></li>
											<li><a href="products.php">Jeans</a></li>
											<li><a href="products.php">Suit</a></li>
											<li><a href="products.php">Blazers</a></li>
											<li><a href="products.php">Mens</a></li>
											<li><a href="products.php">Shoes</a></li>
											<li><a href="products.php">Bottoms</a></li>
                      
                      
                       Electronics-smartphones
                      <li><a href="products.php">T-Shirts</a></li>
											<li><a href="products.php">Shirts</a></li>
											<li><a href="products.php">Jeans</a></li>
											<li><a href="products.php">Suit</a></li>
											<li><a href="products.php">Blazers</a></li>
											<li><a href="products.php">Mens</a></li>
											<li><a href="products.php">Shoes</a></li>
											<li><a href="products.php">Bottoms</a></li>
                      
                      
                      
                      QUERRY FUNCTION
                      
                      <?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` ORDER BY id DESC Limit 7 ");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>

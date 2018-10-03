APPLIANCES
SELECT * FROM `brands` WHERE name IN ('Samsung', 'lG', 'Sony', 'Ramtons', 'Mica', 'Von Point', 'Sterling', 'Philips', 'Ampex', 'Generic', 'Hisense');");
    
FASHION -MEN
SELECT * FROM `brands` WHERE name IN (Gucci', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'Nike', 'Arman');");
 
FASHION -WOMEN
SELECT * FROM `brands` WHERE name IN (Gucci', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'Nike','Arman');");
 
FASHION -KIDS
SELECT * FROM `brands` WHERE name IN (Gucci', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'Nike','Arman');");

FASHION -KIDSline
SELECT * FROM `brands` WHERE name IN (Gucci', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'Nike','Arman');");

FASHION -popular brands
SELECT * FROM `brands` WHERE name IN (Adidas', 'Luis Vuiton', 'Gucci','Puma', 'Playboy', 'Polo', 'Nike','Converse');");
 
SMARTPHONES
SELECT * FROM `brands` WHERE name IN ('Samsung', 'Iphone', 'LG','Huawei', 'Sony Ericson', 'Tecno', 'Oppo', 'Wiko', 'Infinix', 'Itel', 'Generic');");
 
COMPUTING
SELECT * FROM `brands` WHERE name IN ('Hp', 'Samsung', 'Lenovo','Toshiba', 'Dell', 'Acer', 'Desktops', 'Laptops', 'Apple', 'Displays', 'Scanners', 'Photocopiers', 'Accessories');");

FASHION -MEN
SELECT * FROM `brands` WHERE name IN ('Samsung', 'Sony', 'Lg','Ramtons', 'Mica', 'Von Point', 'Sterling', 'Philips', 'Ampex', 'Generic', 'Hisense');");
 

// MAIN FUNCTION

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


















	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="index.php">Home</a></li>
					<li class="grid"><a href="#">Electronics</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Appliances</h4>
										
										<ul>
										    
										    <?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('Samsung', 'lG', 'Sony', 'Ramtons', 'Mica', 'Von Point', 'Sterling', 'Philips', 'Ampex', 'Generic', 'Hisense');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
					                    	
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Smartphones</h4>
										<ul>
										    
										    <?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('Samsung', 'Iphone', 'LG','Huawei', 'Sony Ericson', 'Tecno', 'Oppo', 'Wiko', 'Infinix', 'Itel', 'Generic');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
					                    	
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Computing</h4>
										<ul>
										<ul>
										    
										    <?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('Hp', 'Samsung', 'Lenovo','Toshiba', 'Dell', 'Acer', 'Desktops', 'Laptops', 'Apple', 'Displays', 'Scanners', 'Photocopiers', 'Accessories');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
					                    	
										</ul>
											
										</ul>	
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Men</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Men World</h4>
										<ul>
											
											<?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `categories` WHERE name IN ('Shirts', 'shoes men', 'T-shirts','shorts men', 'watches men', 'Blazers', 'Jackets','Suits','Boxers', 'Jeans', 'Trousers','Sox');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
										
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
										    <?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('Gucci', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'NIKE','ARMAN');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
										</ul>	
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
											<?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('Gucci', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'NIKE','ARMAN');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
										</ul>		
									</div>
								</div>
							</div>
						</li>
						
						<li class="grid"><a href="#">Women</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Women World</h4>
										<ul>
											<?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `categories` WHERE name IN ('tops', 'denims', 'jeans','trousers jeans', 'trenches', 'Bikinis', 'Jewelery','Watches women','shoes', 'shoes women', 'Accessories women','Watches women');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
											<?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('Gucci', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'NIKE','ARMAN');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
											<?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('Gucci', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'NIKE','ARMAN');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
										</ul>	
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Kids</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Kids World</h4>
										<ul>
											<?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('GUCCI', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'NIKE','ARMAN');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
											
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
											<?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('GUCCI', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'NIKE','ARMAN');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
										</ul>	
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
										    
											<?php
                                            // Include the database configuration file
                                            include '../server/dbConfig.php';
    
                                            // Get records from the database
                                            $query = $db->query("SELECT * FROM `brands` WHERE name IN ('Gucci', 'Luis Vuiton', 'Adidas','Puma', 'Playboy', 'Generic', 'NIKE','ARMAN');");
    
                                            if($query->num_rows > 0){ 
                                            while($row = $query->fetch_assoc()){ 
            
                                            ?>
											<li><a href="product_filter.php?id=<?php $id =$row['id']; echo $id;?>"><?php echo $row['name']; ?></a></li>
											<?php } ?>
					                    	<?php } ?>
										</ul>	
									</div>
								</div>
							</div>
						</li>
						
						<li class="grid"><a hidden href="#">Blog</a>
						</li>
						<li class="grid"><a  hidden href="contact.php">Contact</a>

						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->

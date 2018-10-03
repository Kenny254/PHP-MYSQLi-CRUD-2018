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

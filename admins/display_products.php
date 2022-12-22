<?php
	require('../model/connect.php');

	$sql = 'SELECT * FROM products';
	$result = $db->query($sql);

	if ($result->rowCount() > 0){

    	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        	echo "\nProduct ID: " . $row["productID"]. "\nProduct Name: " . $row["productName"]. "\nPrice: " . $row["listPrice"]. 
        	"\n-------------------------------------------------"."\n";
        	
    	}
	}
?>
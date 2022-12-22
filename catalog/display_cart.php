<?php
	require('../model/connect.php');

	$sql = 'SELECT * FROM cart';
	$result = $db->query($sql);
	$grandTotal = NULL;

	if ($result->rowCount() > 0){

    	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        	echo "\nProduct Name: " . $row["productName"]. "\nPrice: " . $row["listPrice"]. "\nQuantity: " . $row["quantity"]. 
        	"\nTotal: ". $total=$row["listPrice"]*$row["quantity"].
        	"\n-------------------------------------------------"."\n";
        	
        	$grandTotal += $row["listPrice"]*$row["quantity"];
    	}

    		echo "Grand Total: ". $grandTotal;
	}
?>
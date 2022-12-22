<?php


function insert($name, $price, $quantity){
	$productName = filter_input(INPUT_POST, $name);
	$listPricestr = filter_input(INPUT_POST, $price);
	(double)$listPrice = $listPricestr;
	$quantity = filter_input(INPUT_POST, $quantity);
	require('connect.php');

	$sql = 'INSERT INTO cart 
				(productName, listPrice, quantity)
			VALUES (:productName, :listPrice, :quantity)';

	$statement = $db->prepare($sql);;
	$statement->bindValue(':productName', $productName);
	$statement->bindValue(':listPrice', $listPrice);
	$statement->bindValue(':quantity', $quantity);
	$statement->execute();
	$statement->closeCursor();

	//I couldn't get the PHP to run unless it was on action 
	//so this returns you to the same page after the php is run. 
	echo "<script>
			 window.history.go(-1);
	 </script>";
}

function print_receipt(){
	//Open file for writing
	require('../model/connect.php');
	$file = fopen("receipt.txt", "w");
	$sql = 'SELECT * FROM cart';
	$result = $db->query($sql);
	$grandTotal = NULL;

	if ($result->rowCount() > 0){

    	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        	$txt = "\nProduct Name: " . $row["productName"]. "\nPrice: " . $row["listPrice"]. "\nQuantity: " . $row["quantity"]. 
        	"\nTotal: ". $total=$row["listPrice"]*$row["quantity"].
        	"\n-------------------------------------------------"."\n";
        	fwrite($file, $txt);
        	$grandTotal += $row["listPrice"]*$row["quantity"];
        	fwrite($file, "Grand Total: " . $grandTotal);
    	}

    		
    	
	}

	fclose($file);

}

?>
<?php
include '../model/connect.php';

function get_product($productID) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE productID = :productID';
    $statement = $db->prepare($query);
    $statement->bindValue(":productID", $productID);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_product($productID){
    global $db;
	$productID = filter_input(INPUT_POST, $productID);


	$sql = 'DELETE FROM products
                WHERE productID = :productID';

	$statement = $db->prepare($sql);;
	$statement->bindValue(':productID', $productID);
	$statement->execute();
	$statement->closeCursor();

	//I couldn't get the PHP to run unless it was on action 
	//so this returns you to the same page after the php is run. 
	echo "<script>
			 window.history.go(-1);
	 </script>";
}

function edit_product($productID, $productName, $listPrice){
	global $db;
	$productID = filter_input(INPUT_POST, $productID);
	$productName = filter_input(INPUT_POST, $productName);
	$listPrice =filter_input(INPUT_POST, $listPrice);


	$sql = 'UPDATE products 
				SET productName = :productName,
                    listPrice = :listPrice
                WHERE productID = :productID';

	$statement = $db->prepare($sql);;
	$statement->bindValue(':productID', $productID);
	$statement->bindValue(':productName', $productName);
	$statement->bindValue(':listPrice', $listPrice);
	$statement->execute();
	$statement->closeCursor();

	//I couldn't get the PHP to run unless it was on action 
	//so this returns you to the same page after the php is run. 
	echo "<script>
			 window.history.go(-1);
	 </script>";
}

function add_product($productID, $productName, $listPrice){
	global $db;
	$productID = filter_input(INPUT_POST, $productID);
	$productName = filter_input(INPUT_POST, $productName);
	$listPrice =filter_input(INPUT_POST, $listPrice);


	$sql = 'INSERT INTO products 
				(productID, productName, listPrice)
			VALUES (:productID, :productName, :listPrice)';

	$statement = $db->prepare($sql);
	$statement->bindValue(':productID', $productID);
	$statement->bindValue(':productName', $productName);
	$statement->bindValue(':listPrice', $listPrice);
	$statement->execute();
	$statement->closeCursor();

	//I couldn't get the PHP to run unless it was on action 
	//so this returns you to the same page after the php is run. 
	echo "<script>
			 window.history.go(-1);
	 </script>";
}
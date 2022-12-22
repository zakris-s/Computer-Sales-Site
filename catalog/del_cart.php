<?php
//Code to empty the cart when the index loads. 
	require('connect.php');

	$sql = 'DELETE FROM cart';

	$statement = $db->prepare($sql);;
	$statement->execute();
	$statement->closeCursor();


?>
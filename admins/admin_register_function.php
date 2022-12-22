<?php
function registration($emailAddress, $password, $firstName, $lastName){
	include '../model/connect.php';
	$emailAddress = filter_input(INPUT_POST, $emailAddress);
	$password = filter_input(INPUT_POST, $password);
	$firstName =filter_input(INPUT_POST, $firstName);
	$lastName = filter_input(INPUT_POST, $lastName);



	$sql = 'INSERT INTO administrators 
				(emailAddress, password, firstName, lastName)
			VALUES (:emailAddress, :password, :firstName, :lastName)';

	$statement = $db->prepare($sql);;
	$statement->bindValue(':emailAddress', $emailAddress);
	$statement->bindValue(':password', $password);
	$statement->bindValue(':firstName', $firstName);
	$statement->bindValue(':lastName', $lastName);
	$statement->execute();
	$statement->closeCursor();

	//I couldn't get the PHP to run unless it was on action 
	//so this returns you to the same page after the php is run. 
	echo "<script>
			 window.history.go(-1);
	 </script>";
}

?>
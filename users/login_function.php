<?php
function login($emailAddress, $password){

	include('connect.php');
	$emailAddress = filter_input(INPUT_POST, $emailAddress);
	$password = filter_input(INPUT_POST, $password);
	$sql = 'SELECT * FROM users';
	$result = $db->query($sql);


	if ($result->rowCount() > 0){

    	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    		if ($row['emailAddress'] == $emailAddress && $row['password'] == $password){
    				echo "<script>
							 location.href='../index.php';
	 					</script>";
    		}	
        	
    	}

	}
}


?>
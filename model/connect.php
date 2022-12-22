<?php
	//Change this to the server, name, and password of the database you create.
	//I linked this file to all the pages that will need to the database to load already as well.
	$username = "362Project";
	$password = "password";
	$dbn = 'mysql:host=localhost;dbname=project_database';


	try {
        $db = new PDO($dbn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        exit();
    }



?>
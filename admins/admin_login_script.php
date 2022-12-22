<?php
    include('../model/connect.php');
    
    // Grab Admin submitted information
    $email = $_POST["emailAddress"];
    $password = $_POST["password"];
    $dbn = mysqli_connect("localhost", "362Project", "password", "project_database");

    
    $query = mysqli_query($dbn,"SELECT emailAddress, password FROM administrators") or die( mysqli_error($dbn));
    $row = mysqli_fetch_array($query);
    
    if($row["emailAddress"]==$email && $row["password"]==$password) {
        echo"You are a validated user.";
        header("Location: ../admins/admin.php");
    }
    else{
        echo"Invalid credentials. <br> WARNING: Security breach detected. IP address has been traced. Local authorities have been notified.";
    }
    

?>
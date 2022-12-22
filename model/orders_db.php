<?php
function get_orders() {
    global $db;
    $query = 'SELECT * FROM orders
              ORDER BY orderID';
    $statement = $db->prepare($query);
    $statement->execute();
    $orders = $statement->fetchAll();
    $statement->closeCursor();
    return $orders;    
}

function get_customer_ID($customerID) {
    global $db;
    $query = 'SELECT * FROM orders
              WHERE customerID = :customerID';    
    $statement = $db->prepare($query);
    $statement->bindValue(':customerID', $customerID);
    $statement->execute();    
    $orders = $statement->fetch();
    $statement->closeCursor();    
    $customerID = $order['customerID'];
    return $orders;
}
?>
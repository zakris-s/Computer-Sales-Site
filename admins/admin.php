<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Not Your Type</title>
<link href="../styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include '../model/connect.php';?>
<h1 class="header">Not Your Type </h1>
<nav class="menu">
    <ul>
	  <li><a href="../index.php">Home</a></li>
      <li><a href="../catalog/store.php">Store</a></li>
	  <li><a href="../users/login.php">Login</a></li>
	  <li><a href="../catalog/cart.php">Cart</a></li>
	  <li><a href="admin_login.php">Admin</a></li>
    </ul>
  </nav>
  <br>
  <table class="admin_tbl">
    <tbody>
      <tr>
        <td><p class="admin_text">Administration</p>
        
        <form action = 'admin_register.php' method = 'POST'>
        <input id='create_admin_btn' class='admin_btn' type='submit' value = 'Create New Admin Account'>
        </form>
        
        <p>Select an item or sale from the correspoding databases below.
			<strong></strong></p>
          <strong><br>
        Products</strong><br>
        <textarea id = "product_db_text" class="product_db_text"><?php include("../admins/display_products.php"); ?></textarea><br><br><br>

        <form action = 'add_product.php' method = 'POST'>
        <input id ="add_btn" class="admin_btn" type="submit" value="Add"> 
        </form> <br>

        <form action = 'edit_product.php' method = 'POST'>
        <input id ="edit_btn" class="admin_btn" type="submit" value="Edit"><br>
        </form> <br>

        <form action = 'delete_product.php' method = 'POST'>
        <input id ="del_btn" class="admin_btn" type="submit" value="Delete"><br>
        </form> <br>

        <form action = '../index.php' method = 'POST'>
        <input id="cancel_btn" class="admin_btn" type="submit" value="Cancel"> <br> <br>
        </form>

        <strong>Sales</strong><br>
        <label for="search">Search:</label>
        <input type="text" name="search" id="search" class="search">
        <br>
        <textarea id="cart_disp" class="cart_disp"><?php include("../catalog/display_cart.php"); ?></textarea><br>
        <br><input id="delsale_btn" class="admin_btn" type="button" value="Delete Sale"> 
        <input id ="printrep_btn" class="admin_btn" type="button" value="Print Report"></td> <br>

    
      </tr>
    </tbody>
  </table>
</body>
</html>
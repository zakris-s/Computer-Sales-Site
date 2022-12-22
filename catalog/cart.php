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
	  <li><a href="../admins/admin_login.php">Admin</a></li>
    </ul>
  </nav>
	<br>
	<table class="cart_tbl">
    <tbody>
      <tr>
        <td><p class="cart_text">Cart</p>
        <p>Below are the items in your cart</p>
        <br>
          <textarea id="cart_disp" class="cart_disp"><?php include("../catalog/display_cart.php"); ?></textarea><br>
        <br>
        <br><br>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-8c11045b-c147-4e61-bc39-33f5b848f0ad"> </div>
        <form method="POST">
          <input type="submit" class="receipt_btn" value="Checkout" name="checkout_btn">
          <input type="submit" class="receipt_btn" value="Print Receipt" name="receipt_btn">
        </td>
        </form>
        <?php
          if($_POST['checkout_btn'] ?? null){
            include("mail_user.php");
            mail_receipt();
          }
        ?>
        <?php
          if($_POST['receipt_btn'] ?? null){
            include("add_cart.php");
            print_receipt();
          }
        ?>
      </tr>
    </tbody>
  </table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Not Your Type</title>
<link href="../styles.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1 class="header">Not Your Type </h1>
<nav class="menu">
    <ul>
	  <li><a href="../admins/admin.php">Admin</a></li>
    </ul>
  </nav>
  <br>
  <table class="login_tbl">
    <tbody>
      <tr>
        <td>
	<form action="" method="POST" >
	<div >
		<form action="" method="POST" >
            <p style="font-size: 2rem; font-weight: 800;">Delete Product</p>
			<div >
				<input type="text" name="productID" placeholder ="Product ID" required>
			</div>
            
            <div>
				<button name="submit" class="receipt_btn", id="submit">Delete Product</button>
			</div> <br><br><br>
			
		</form>
		<?php
            include_once ('../model/product_db.php');
            if (isset($_POST['submit'])) {
              delete_product('productID');
            return;
          }
          ?>


	</div>
</td>
      </tr>
    </tbody>
  </table>
</body>
</html>
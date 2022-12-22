<!doctype html>
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
	  <li><a href="../index.php">Home</a></li>
      <li><a href="../catalog/store.php">Store</a></li>
	  <li><a href="../users/login.php">Login</a></li>
	  <li><a href="../catalog/cart.php">Cart</a></li>
	  <li><a href="../admins/admin_login.php">Admin</a></li>
    </ul>
  </nav>
  <br>
  <table class="login_tbl">
    <tbody>
    <tr>
        <td>
           <form action="" method="POST" >
			<p style="font-size: 2rem; font-weight: 800;">Login</p>
			<div >
				<input type="email" placeholder="Email Address" name="emailAddress" placeholder="Email Address" id="emailAddress">
			</div>
			<div >
				<input type="password" placeholder="Password" name="password" placeholder="Password" id="password">
			</div>
			<div >
				<br>
				<button name="submit" class="receipt_btn" >Login</button>
			</div>
			<p>Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
		</td>
		<?php
            include_once ('login_function.php');
            if (isset($_POST['submit'])) {
              login('emailAddress', 'password');
            return;
          }
          ?>
	</div>

      </tr>
    </tbody>
  </table>
</body>
</html>
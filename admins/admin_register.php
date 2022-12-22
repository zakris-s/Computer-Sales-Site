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
            <p style="font-size: 2rem; font-weight: 800;">Register</p>
			<div >
				<input type="email" placeholder="Email Address" name="emailAddress" placeholder ="Email Address" required>
			</div>
			<div >
				<input type="password" placeholder="Password" name="password" placeholder = "Password" required>
            </div>

            <div>
				<input type="text" placeholder="First Name" name="firstName" placeholder="First Name" required>
			</div>
            
            <div >
				<input type="text" placeholder="Last Name" name="lastName" placeholder="Last Name" required>
			</div>

			<div>
				<button name="submit" class="receipt_btn", id="submit">Register</button>
			</div>
			<p > <a href="../account/login.php">Admin Login Page</a>.</p>
		</form>
		<?php
            include_once ('admin_register_function.php');
            if (isset($_POST['submit'])) {
              registration('emailAddress', 'password', 'firstName','lastName');
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
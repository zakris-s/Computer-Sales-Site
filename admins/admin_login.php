<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">
    <script>

    </script>
    <head>
        <meta charset="utf-8">
		<title>Not Your Tyle</title>
		<link rel="stylesheet" href="../styles.css">
		<link rel="stylesheet" type="text/css" href="/lib/fontawesome-free-5.15.2-web/css/all.css">
		<link rel="stylesheet" type="text/css" href="/lib/jquery-ui-1.12.1.custom/jquery-ui.css" /></script>
    </head>
    <body>
    <?php include '../view/header.php'; ?>
		</div>
        <div class="login">
			<p id='err-msg'>
				<?php
					if (isset($_SESSION['login-err'])) {
						echo($_SESSION['login-err']);
					}
				?>
			</p>
            <nav class="menu">
                <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../catalog/store.php">Store</a></li>
                <li><a href="../users/login.php">Login</a></li>
                <li><a href="../catalog/cart.php">Cart</a></li>
                <li><a href="../admins/admin_login.php">Admin</a></li>
                </ul>
            </nav>
            <h2 align="center">ADMIN LOGIN PAGE<br>AUTHORIZED USERS ONLY</h2>
            <table class = "login_tbl">
                    <tbody>
                        <tr>
                            <td>
                                <form action="admin_login_script.php" method="post">
     
                                    <input type="text" placeholder="Enter Email Address" name="emailAddress" class = "email" required>
                                    <br>
                                    <input type="password" placeholder="Enter Password" name="password" class = "password" required>   
                                    <br>       
                                    <br> 
                                    <input type="submit" value="Login" class="login_btn">
                                </form>
                            </td>
                        </tr>
                    </tbody>
            </table>
            
		</div>
    </body>
    <br>
    <?php include '../view/footer.php'; ?>
</html>
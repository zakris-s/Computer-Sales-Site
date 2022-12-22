<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Not Your Type</title>
  <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include 'model/connect.php';?>
<?php require 'catalog/del_cart.php';?>
<h1 class="header">Not Your Type </h1>
<nav class="menu">
    <ul>
	  <li><a href="index.php">Home</a></li>
      <li><a href="catalog/store.php">Store</a></li>
	  <li><a href="users/login.php">Login</a></li>
	  <li><a href="catalog/cart.php">Cart</a>
	  <li><a href="admins/admin_login.php">Admin</a></li>
	  </li>
    </ul>
  </nav>
  <br>
  <p class="store_msg">Here at Not Your Type we focus on delviering the highest quality products in the computer market. We specalize in keyboard switces and keycaps
  					   and have recently started to carry gaming deskmats. Our goal is to become of the top retails in this market, but we can't get there without your
  					   support! Thank you so much for shopping whith us and we hope to keep you as a valued customer throughout your computer journey.</p>
  <br>
  <p class="store_msg">Check out some of our most popular items!</p>
  <br>
  <form method="post">
    <table class ="index_tbl action=">
    <tbody>
      <tr>
        <td><img class="store_img" src="images/turquoise_sw.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Turquoise Switches" name="turquoise_sw_name" readonly="readonly">
        </input><br><br>
          <label for="turquoise_sw_price">Price (usd): </label><br>
          <input class ="input" type="text" Value= "0.50" name ="turquoise_sw_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity" min="0"><input type="submit" name="add_to_cart" value="Add to Cart"></td>
          <?php
            include_once ('catalog/add_cart.php');
            if (isset($_POST['add_to_cart'])) {
              insert('turquoise_sw_name', 'turquoise_sw_price', 'quantity');
            return;
          }
          ?>

        <td><img class="store_img" src="images/stars_mp.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Moon Deskmat" name="stars_mp_name" readonly="readonly"></input>
          <br><br>
          <label for="stars_mp_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="24.99" name ="stars_mp_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity2" min="0"> <input type="submit" name="add_to_cart2" value="Add to Cart" ></td>
          <?php
            include_once ('catalog/add_cart.php');
            if (isset($_POST['add_to_cart2'])) {
              insert('stars_mp_name', 'stars_mp_price', 'quantity2');
            return;
          }
          ?>

        <td><img class="store_img" src="images/red_kc.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Red and White Keycaps" name="red_kc_name" readonly="readonly"></input><br><br>
          <label for="red_kc_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="22.99" name ="red_kc_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity3" min="0"> <input type="submit" name="add_to_cart3" value="Add to Cart" ></td>
          <?php
            include_once ('catalog/add_cart.php');
            if (isset($_POST['add_to_cart3'])) {
              insert('red_kc_name', 'red_kc_price', 'quantity3');
            return;
          }
          ?>

        <td><img class="store_img" src="images/retro_kc.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Retro Keycaps" name="retro_kc_name" readonly="readonly"></input>
          <br><br>
          <label for="red_kc_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="35.99" name ="retro_kc_price" readonly="readonly" ></input>
          <br><br><input class = "store_input" type="number" name="quantity4" min="0"> <input type="submit" name="add_to_cart4" value="Add to Cart" ></td>
          <?php
            include_once ('catalog/add_cart.php');
            if (isset($_POST['add_to_cart4'])) {
              insert('retro_kc_name', 'retro_kc_price', 'quantity4');
            return;
          }
          ?>

        <td><img class="store_img" src="images/sakura_kc.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Sakura Keycaps" name="sakura_kc_name" readonly="readonly"></intpu>
          <br><br>
          <label for="sakura_kc_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="29.99" name ="sakura_kc_price" readonly="readonly" ></input>
          <br><br><input class = "store_input" type="number" name="quantity5" min="0"> <input type="submit" name="add_to_cart5" value="Add to Cart" ></td>
          <?php
            include_once ('catalog/add_cart.php');
            if (isset($_POST['add_to_cart5'])) {
              insert('sakura_kc_name', 'sakura_kc_price', 'quantity5');
            return;
          }
          ?>
      </tr>
    </tbody>
    </table>
  </form>
</body>
</html>
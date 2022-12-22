<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Not Your Type</title>
<link href="../styles.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
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
	<p class="store_msg">Browse our products below</p>
<form method="post">
<table class ="store_tbl">
  <tbody>
      <tr>
        <td><img class="store_img" src="../images/cherry_kc.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Spring Keycaps" name="spring_kc_name" readonly="readonly">
        </input><br><br>
          <label for="spring_kc_price">Price (usd): </label><br>
          <input class ="input" type="text" Value= "54.99" name ="spring_kc_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity6" min="0"><input type="submit" name="add_to_cart6" value="Add to Cart"></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart6'])) {
              insert('spring_kc_name', 'spring_kc_price', 'quantity6');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/purple_kc.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Purple Keycpas" name="purple_kc_name" readonly="readonly"></input>
          <br><br>
          <label for="purple_kc_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="24.99" name ="purple_kc_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity7" min="0"> <input type="submit" name="add_to_cart7" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart7'])) {
              insert('purple_kc_name', 'purple_kc_price', 'quantity7');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/red_kc.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Red and White Keycaps" name="red_kc_name" readonly="readonly"></input><br><br>
          <label for="red_kc_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="22.99" name ="red_kc_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity8" min="0"> <input type="submit" name="add_to_cart8" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart8'])) {
              insert('red_kc_name', 'red_kc_price', 'quantity8');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/retro_kc.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Retro Keycaps" name="retro_kc_name" readonly="readonly"></input>
          <br><br>
          <label for="red_kc_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="35.99" name ="retro_kc_price" readonly="readonly" ></input>
          <br><br><input class = "store_input" type="number" name="quantity9" min="0"> <input type="submit" name="add_to_cart9" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart9'])) {
              insert('retro_kc_name', 'retro_kc_price', 'quantity9');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/sakura_kc.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Sakura Keycaps" name="sakura_kc_name" readonly="readonly"></intpu>
          <br><br>
          <label for="sakura_kc_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="29.99" name ="sakura_kc_price" readonly="readonly" ></input>
          <br><br><input class = "store_input" type="number" name="quantity10" min="0"> <input type="submit" name="add_to_cart10" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart10'])) {
              insert('sakura_kc_name', 'sakura_kc_price', 'quantity10');
            return;
          }
          ?>
      </tr>

      <tr>
        <td><img class="store_img" src="../images/hex_mp.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Hex Mousepad" name="hex_mp_name" readonly="readonly">
        </input><br><br>
          <label for="hex_mp_price">Price (usd): </label><br>
          <input class ="input" type="text" Value= "18.99" name ="hex_mp_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity11" min="0"><input type="submit" name="add_to_cart11" value="Add to Cart"></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart11'])) {
              insert('hex_mp_name', 'hex_mp_price', 'quantity11');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/graffiti_mp.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Graffiti Mousepad" name="graffiti_mp_name" readonly="readonly"></input>
          <br><br>
          <label for="graffiti_mp_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="28.99" name ="graffiti_mp_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity12" min="0"> <input type="submit" name="add_to_cart12" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart12'])) {
              insert('graffiti_mp_name', 'graffiti_mp_price', 'quantity12');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/gutzy_mp.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Swirls Mousepad" name="gutzy_mp_name" readonly="readonly"></input><br><br>
          <label for="gutzy_mp_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="29.99" name ="gutzy_mp_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity13" min="0"> <input type="submit" name="add_to_cart13" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart13'])) {
              insert('gutzy_mp_name', 'gutzy_mp_price', 'quantity13');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/stars_mp.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Stars Mousepad" name="stars_mp_name" readonly="readonly"></input>
          <br><br>
          <label for="stars_mp_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="24.99" name ="stars_mp_price" readonly="readonly" ></input>
          <br><br><input class = "store_input" type="number" name="quantity14" min="0"> <input type="submit" name="add_to_cart14" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart14'])) {
              insert('stars_mp_name', 'stars_mp_price', 'quantity14');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/gaming_mp.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Japnaese Mousepad" name="gaming_mp_name" readonly="readonly"></intpu>
          <br><br>
          <label for="gaming_mp_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="22.99" name ="gaming_mp_price" readonly="readonly" ></input>
          <br><br><input class = "store_input" type="number" name="quantity15" min="0"> <input type="submit" name="add_to_cart15" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart15'])) {
              insert('gaming_mp_name', 'gaming_mp_price', 'quantity15');
            return;
          }
          ?>
      </tr>
      
      <tr>
        <td><img class="store_img" src="../images/gold_sw.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="MX Gold Switches" name="gold_sw_name" readonly="readonly">
        </input><br><br>
          <label for="gold_sw_price">Price (usd): </label><br>
          <input class ="input" type="text" Value= "0.20" name ="gold_sw_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity16" min="0"><input type="submit" name="add_to_cart16" value="Add to Cart"></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart16'])) {
              insert('gold_sw_name', 'gold_sw_price', 'quantity16');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/gum_sw.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Drop Halo Pink Switches" name="gum_sw_name" readonly="readonly"></input>
          <br><br>
          <label for="gum_sw_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="0.85" name ="gum_sw_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity17" min="0"> <input type="submit" name="add_to_cart17" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart17'])) {
              insert('gum_sw_name', 'gum_sw_price', 'quantity17');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/mxpink_sw.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="MX Pink Switches" name="mxpink_sw_name" readonly="readonly"></input><br><br>
          <label for="mxpink_sw_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="0.99" name ="mxpink_sw_price" readonly="readonly"></input>
          <br><br><input class = "store_input" type="number" name="quantity18" min="0"> <input type="submit" name="add_to_cart18" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart18'])) {
              insert('mxpink_sw_name', 'mxpink_sw_price', 'quantity18');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/linear_sw.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Linear Switches" name="linear_sw_name" readonly="readonly"></input>
          <br><br>
          <label for="linear_sw_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="0.70" name ="linear_sw_price" readonly="readonly" ></input>
          <br><br><input class = "store_input" type="number" name="quantity19" min="0"> <input type="submit" name="add_to_cart19" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart19'])) {
              insert('linear_sw_name', 'linear_sw_price', 'quantity19');
            return;
          }
          ?>

        <td><img class="store_img" src="../images/turquoise_sw.jpg" width="166" height="157" alt=""/><br><input class="input" type="text" value="Turquoise Switches" name="turquoise_sw_name" readonly="readonly"></intpu>
          <br><br>
          <label for="turquoise_sw_price">Price (usd): </label><br>
          <input class ="input" type="text" Value="0.50" name ="turquoise_sw_price" readonly="readonly" ></input>
          <br><br><input class = "store_input" type="number" name="quantity20" min="0"> <input type="submit" name="add_to_cart20" value="Add to Cart" ></td>
          <?php
            include_once ('add_cart.php');
            if (isset($_POST['add_to_cart20'])) {
              insert('turquoise_sw_name', 'turquoise_sw_price', 'quantity20');
            return;
          }
          ?>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>
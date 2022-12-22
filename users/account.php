<?php include '../view/header.php'; ?>
<?php

session_start();

?>
<link rel="stylesheet" href="../main.css">

<main>
    <body>



        <form>

            <div class="container">

                <h2 class = "h1Index"><b>Your Account</b></h2>

                <form action="logout.php" method="post">
                    <input type="submit" value="Logout" name="btn">
                </form>

            </div>

        </form>


    </body>
</main>
<?php include '../view/footer.php'; ?>
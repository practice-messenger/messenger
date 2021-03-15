<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Global</title>
    <link rel="stylesheet" href="style/global.css">
</head>
<body>
    <div>
        <div class="left">
            <div class="top">aaa</div>
            <div class="bottom">aaa</div>
        </div>
        <div class="right">
            <div>
                <?php
                if (isset($_POST['create'])){
                    echo 'User submitted';
                }
                ?>
            </div>
            <div class="login">
                <?php
			        if (isset($_COOKIE['user']) == ''):
		        ?>
                <h2 align="center">Log In</h2>
                    <form action="auth.php" method="post" class="col">
                        <label for="login">Mail or phone number</label><br>
                        <input type="text" class="form-control" name="login" id="login"><br>
                        <label for="pass">Password</label><br>
                        <input type="text" class="form-control" name="pass" id="pass"><br>
                        <button align="center" type="submit">Log In</button>
                </form>
                <?php else: ?>
                    <p>Hello <?=$_COOKIE['user'] ?>.  <a href="exit.php">Exit</a></p>
                <?php
			        endif;
		        ?>
            </div>
            <div class="register">
                <h2 align="center">Register</h2>
                <form action="reg.php" method="post">
                    <p>Fill up the form with correct values</p>
                    <label for="first_name">First Name</label><br>
                    <input type="text" class="form-control" name="first_name" id="first_name" required><br>

                    <label for="last_name">Last Name</label><br>
                    <input type="text" class="form-control" name="last_name" id="last_name" required><br>

                    <label for="mail">Email Address</label><br>
                    <input type="text" class="form-control" name="mail" id="mail" required><br>

                    <label for="phone_number">Phone Number</label><br>
                    <input type="text" class="form-control" name="phone_number" id="phone_number" required><br>

                    <label for="password">Password</label><br>
                    <input type="text" class="form-control" name="password" id="password" required><br>

                    <label for="password2">Repeat Password</label><br>
                    <input type="text" class="form-control" name="password2" id="password2" required><br>
                    <?php
                    if ($_SESSION['pass2']){
                        echo '<p class="pass">' .$_SESSION['pass2'].'</p><br>';
                    }
                    unset($_SESSION['pass2']);
                    ?>

                        <button class="btn btn-success" type="submit" name="create">Register</button>
                </form>
            </div>
            <div class="change_language"><input value="change language"></div>
        </div>
    </div>
</body>
</html>
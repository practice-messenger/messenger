<?php
session_start();
?>
<HTML lang="en">
<HEAD>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register</title>
	<link rel="stylesheet" href="style/index.css">
</HEAD>
<body>
<div>
    <?php
        if (isset($_POST['create'])){
            echo 'User submitted';
        }
    ?>
</div>
	<div class="container">

		<div class="row">
			<h2>Register</h2>
            <form action="reg.php" method="post" class="col">
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
                <p>If you have account click for <a href="index.php">this</a><br>
			<button class="btn btn-success" type="submit" name="create">Register</button>
            </form>
			</div>

	</div>
</body>
</HTML>
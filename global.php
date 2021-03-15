<HTML lang="en">
<HEAD>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="style/index.css">
</HEAD>
<body>
<div class="container mt-4" >

    <?php
    if (isset($_COOKIE['user']) == ''):
        ?>
        <!--
                <div class="row">
                    <h2>Register</h2>
                <form action="check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Login"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
                    <input type="text" class="form-control" name="pass" id="pass" placeholder="Password"><br>
                    <button class="btn btn-success" type="submit">Register</button>
                </form>
                    </div>
         -->
        <div class="">
            <h2>Log In</h2>
            <form action="auth.php" method="post" class="col">
                <label for="login">Mail or phone number</label><br>
                <input type="text" class="form-control" name="login" id="login"><br>
                <label for="pass">Password</label><br>
                <input type="text" class="form-control" name="pass" id="pass"><br>
                <button class="btn btn-success" type="submit">Log In</button>
                <p>If you dont have account click <a href="register.php">this</a></p>
            </form>
        </div>
    <?php else: ?>
        <p>Hello <?=$_COOKIE['user'] ?>.  <a href="exit.php">Exit</a></p>
    <?php
    endif;
    ?>

</div>
</body>
</HTML>
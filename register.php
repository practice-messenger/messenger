<HTML lang="en">
<HEAD>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register</title>
	<link rel="stylesheet" href="style/style.css">
</HEAD>
<body>
	<div class="container">
        <form action="check.php" method="post">
		<div class="row">
			<h2>Log in</h2>
            <p>Fill up the form with correct values</p>
            <label for="firstname">First Name</label><br>
			<input type="text" class="form-control" name="firstname" id="firstname" required><br>

            <label for="lastname">Last Name</label><br>
            <input type="text" class="form-control" name="lastname" id="lastname" required><br>

            <label for="email_address">Email Address</label><br>
            <input type="text" class="form-control" name="email_address" id="email_address" required><br>

            <label for="phone_number">Phone Number</label><br>
            <input type="text" class="form-control" name="phone_number" id="phone_number" required><br>

            <label for="password">Password</label><br>
            <input type="text" class="form-control" name="password" id="password" required><br>

            <label for="password2">Repeat Password</label><br>
            <input type="text" class="form-control" name="password2" id="password2" required><br>

			<button class="btn btn-success" type="submit" name="create">Sign Up</button>

			</div>
        </form>
	</div>
</body>
</HTML>
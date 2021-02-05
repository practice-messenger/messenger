<HTML lang="en">
<HEAD>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Complatible" content="ie=edge">
	<title>Regist</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</HEAD>
<body>
	<div class="conteiner mt-4">

		<!-- <?php 
			if ($_COOKIE['user'] == ''):
		?>-->

		<div class="row">
			<h2>Regist</h2>
		<form action="check.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Login"><br>
			<input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
			<input type="text" class="form-control" name="pass" id="pass" placeholder="Password"><br>
			<button class="btn btn-success" type="submit">Regist</button>
		</form>
			</div>

		<!--<?php else: ?>
			<p>Hello <?=$_COOKIE["user"]  ?></p>
		<?php
			endif;
		?>-->

	</div>
</body>
</HTML>
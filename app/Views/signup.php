<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Signup Form</title>
</head>
<body>
	<h1>Signup Form</h1>
	<form action="signup" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" value="<?= set_value('username')?>" required><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="<?= set_value('email')?>" required><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" value="<?= set_value('password')?>" required><br><br>
		<label for="password">Confirm Password:</label>
		<input type="password" id="cpassword" name="cpassword" value="<?= set_value('cpassword')?>" required><br><br>

		<input type="submit" value="Signup">
	</form>
</body>
</html>



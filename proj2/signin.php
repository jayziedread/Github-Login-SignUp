<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>signup & sign in</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<script src="https://kit.fontawesome.com/7f4ba218db.js" crossorigin="anonymous"></script>
	
</head>
<body>

	

	<div class="container">
		<div class="form-box">
			<h1 id="title">Sign Up</h1>

			<form action="process.php" method="post" >
				<div class="input-group">
					<div class="input-field" id="nameField">
						<i class="fa-solid fa-user"></i>
						<input type="text" placeholder="Name" id="name" name="name" required>
					</div>

					<div class="input-field">
						<i class="fa-solid fa-envelope"></i>
						<input type="email" placeholder="Email" id="email" name="email" required>
					</div>

					<div class="input-field">
						<i class="fa-solid fa-key"></i>
						<input type="password" class="pass-fld" id="password" name="password" placeholder="Password" required>						
					</div>
					
					<p>Lost password <a href="#">Click Here</a></p>
				</div>
				<div class="btn-field">
					
					<button type="submit" id="signUpBtn" name="create">Sign up</button> 
					<button type="button" id="signInBtn" class="disable" onclick="location.href='login.php'" >Sign in</button> 
					
				</div>
			</form>
		</div>
	</div>

	


</body>
</html>
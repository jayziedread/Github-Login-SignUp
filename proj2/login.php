<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/config.php";
    
    $sql = sprintf("SELECT * FROM users
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $users["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>sign in</title>
    <meta charset="UTF-8">
  
    <link rel="stylesheet" type="text/css" href="./style.css">
	<script src="https://kit.fontawesome.com/7f4ba218db.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
		<div class="form-box">
			<h1 id="title">Sign Up</h1>


		    <?php if ($is_invalid): ?>
		        <em>Invalid login</em>
		    <?php endif; ?>

			<form  method="post">
				<div class="input-group">

					<div class="input-field">
						<i class="fa-solid fa-envelope"></i>
						<input type="email" placeholder="Email" id="email" name="email"  value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
					</div>

					<div class="input-field">
						<i class="fa-solid fa-key"></i>
						<input type="password" class="pass-fld" id="password" name="password" placeholder="Password" >						
					</div>
					
					<p>Sign in <a href="signin.php">Click Here</a></p>
				</div>
				<div class="btn-field">
					
					<button>Sign in</button> 
					
					
				</div>
			</form>
		</div>
	</div>





</body>
</html>








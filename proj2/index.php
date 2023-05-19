<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="https://kit.fontawesome.com/7f4ba218db.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
        <div class="form-box">
            <h1 id="title">Home</h1>
                <?php if (isset($user)): ?>
            
                <p><a href="login.php">Log in</a> or <a href="signin.php">sign up</a></p>
            

            
                <?php else: ?>
            
                

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ornare suspendisse sed nisi lacus sed. Malesuada pellentesque elit eget gravida cum sociis natoque. Curabitur gravida arcu ac tortor dignissim. Ultrices gravida dictum fusce ut. Turpis massa sed elementum tempus egestas sed sed risus pretium. Aliquet risus feugiat in ante metus dictum at. Pharetra et ultrices neque ornare. Semper risus in hendrerit gravida rutrum quisque non tellus orci. Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam. Elit pellentesque habitant morbi tristique senectus. In hendrerit gravida rutrum quisque non tellus. Massa placerat duis ultricies lacus sed turpis tincidunt id. In nulla posuere sollicitudin aliquam. Diam quis enim lobortis scelerisque. Nisl purus in mollis nunc sed id semper risus. Sapien eget mi proin sed libero enim. Est velit egestas dui id ornare arcu odio. Ac orci phasellus egestas tellus rutrum tellus.</p>

                &nbsp;

                <p><a href="logout.php">Log out</a></p>
            
                <?php endif; ?>
        </div>
    </div>

   
</body>
</html>
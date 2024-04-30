<?php
?>
<html>
    <head>
        <title> Login Page </title>

        <link rel="stylesheet" type="text/css" href="registerform.css">
    </head>

    <body>

        <div class="form">
        <form method="post" action="signing-func.php" enctype="multipart/form-data">
    <h1>Login</h1>
   
    
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit"> Login </button>
    <a href="/signup.php" class="text-info" ><strong>Register here</strong></a>

</form>

        </div>
    </body>
</html>



<!DOCTYPE html>
<html>
    <head>
        <title>Login Form Design</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <body>
    

                <div class="loginbox">
                        <img src="Asset/avatar.png" class="avatar">
                    <form action = "action.php" method="post">
                        <h1>Login Here</h1>
                        <?php if(isset($_GET['error'])) {?>
                        <p class= "error"><?php echo $_GET['error'];?> </p>
                        <?php}  ?>
                        
                            <label>Username</label>
                            <input type="text" name="uname" placeholder="Enter Username"><br>
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password">
                        <button type="submit"> Login</button><br>
                            <a href="#">Lost your Password?</a><br>
                            <a href="SignUp.html">Don't have an account?</a>
                        </form>
                </div>
            </div>
        </body>
    </head>
</html>

<!DOCTYPE html>
<?php 
    session_start();
?>
<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Home</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        <script></script>
        
    </head>
    
    <body>
        
        <!-- Needs php: Form validation, are the input entries required and sound -->
        <!-- Needs php: Check with database if credentials are valid -->
        <!-- Needs php: Succesful submition to redirect user to Marketplace page -->
        
        <div id="formContainer">
        
            <a href="home.php"><img src="images/logo.png" width="200"></a>
            
            <h2>Welcome Back</h2>
            <form method="post" action="loginpage.php">
                <input type="text" name="username" placeholder=Username>
                    <br><br>
                <input type="password" name="password" placeholder="Password">
                    <br><br>
                <input type="submit" name="submit" value="Login">  
                    <br><br>
                <p>Don't have an account yet? <a href="register.php">Sign Up</a></p>
            </form>
        </div>
    
    </body>
    
</html>
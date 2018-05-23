<?php 
    session_start();
?>
<!DOCTYPE html>
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
        <!-- Needs php: Send valid information to database in order to make an account -->
        <!-- Needs php: Succesful submition to redirect user to Profile page -->
        
        <div id="formContainer">
        
            <a href="home.php"><img src="images/logo.png" width="200"></a>
            
            <h2>Sign up for FREE today!</h2>
            <form method="POST" action="registeruser.php">
                <input type="text" name="name" placeholder="Full Name">
                    <br><br>
                <input type="text" name="email" placeholder="Email">
                    <br><br>
                <input type="text" name="username" placeholder=Username>
                    <br><br>
                <input type="password" name="password" placeholder="Password">
                    <br><br>
                <input type="submit" name="submit" value="Sign Up">  
                    <br><br>
            </form>
            <p>Already have an account? <a href="login.php">Login</a></p>
            
        </div>
    
    </body>
    
</html>
<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Upload Job</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        <script></script>
        
    </head>
    
    <body>
        
        <!-- Needs php: Form validation, are the input entries required and sound -->
        <!-- Needs php: Send valid information to database in order to make an account -->
        <!-- Needs php: Succesful submition to redirect user to Profile page -->
        
        <div id="formContainer">
            
            <h2>Upload Job</h2>
            <img src="images/aashish.png" width="200">
            <form method="POST" action="upload.php" style="margin: 20px; overflow: hidden;">
                <input type="file" name="uploadJob" style="width: 100%; display: flex; overflow: hidden; justify-contents: center; margin: 20px; text-align: center;">
                <input type="submit" name="submit" value="Upload Job">  
                    <br><br>
            </form>
            
        </div>
    
    </body>
    
</html>

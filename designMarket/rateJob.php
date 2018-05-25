<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Rate Job</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        <script></script>
        
    </head>
    
    <body>
        
        <!-- Needs php: Form validation, are the input entries required and sound -->
        <!-- Needs php: Send valid information to database in order to make an account -->
        <!-- Needs php: Succesful submition to redirect user to Profile page -->
        
        <div id="formContainer">
            
            <h2>Rate Job</h2>
            <img src="images/aashish.png" width="200">

            <form method="POST" action="rate.php" style="margin: 20px;">
                
                <input type="hidden" name="postid" value="<?php echo $_GET['id'] ?>">
                <select name="rating" style="margin: 15px;">
                    <option value="5">5 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="2">2 Stars</option>
                    <option value="1">1 Stars</option>
                    <option value="0">0 Stars</option>
                </select>
                <input type="submit" name="submit" value="Rate">  
                    <br><br>
            </form>
            
        </div>
    
    </body>
    
</html>

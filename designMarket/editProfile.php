<?php 
    session_start();
?>
<!DOCTYPE html>

<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Edit Profile</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        
        <script></script>
        
    </head>
    
    <body>
        
        <?php include('header.php'); ?>      
            
        <div id="postContainer">
            
            <li>
                <h1>Edit Profile</h1>
            </li>
            
            
            <form method="POST" action="profileedit.php" enctype="multipart/form-data">
	            <li>
	                <h2>Profile Picture</h2>
                    <p>Upload a new Profile Picture</p>
	                <input type="file" name="uploadProfilePicture">
	                <br><br>
	            </li>
	            
	            <li>
	                <h2>About Me</h2>
	                <p>Let potential clients and peers know more about you, what is your skillset and what training have you completed.</p>
	                <textarea rows="4" cols="50" name="description" placeholder="Tell us about yourself."></textarea>
	                <br><br>
	            </li>
	            
	            <input id="postEditProfile" type="submit" value="Save Changes" style="margin-top: 25px; margin-bottom: 25px;">

            </form>
            
        
        </div>
    
    </body>
    
</html>

<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Profile</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        <script></script>
        
    </head>
    
    <body>
    
        <?php include('header.php'); ?>
            
        <div id="profileContainer">
            
            
            <!-- Need php to have edit button appear for user only -->
            
            <div id="profileHeader">
                <div id="profilePicture">
                    <img src="images/aashish.png" width="250">
                    <a href="editProfile.php"><button type="button">Edit Profile</button></a>
                </div>
                
                <div id="profileInfo">
                    <h2 id="username">Username</h2>
                    <h3 id="userFullName">Users Full Name</h3>
                    <img id="userRatingAvg" src="images/fiveStars.png" width="150">
                    <p id="userAboutMe">About Me About Me About Me About Me About Me  About Me About Me About Me About Me About Me  About Me About Me About Me About Me About Me  About Me About Me About Me About Me About Me  About Me About Me About Me About Me About Me  About Me About Me About Me About Me About Me  </p>
                    
                </div>
                
            </div>
            
            <div id="profilePortfolio">
                
                <h2>Portfolio</h2>
                
                <ul>
                    <li><img src="images/exampleLogo4.png" width="200"><img src="images/fourStars.png" width="200"></li>
                    <li><img src="images/exampleLogo4.png" width="200"><img src="images/fourStars.png" width="200"></li>
                    <li><img src="images/exampleLogo4.png" width="200"><img src="images/fourStars.png" width="200"></li>
                    <li><img src="images/exampleLogo4.png" width="200"><img src="images/fourStars.png" width="200"></li>
                    <li><img src="images/exampleLogo4.png" width="200"><img src="images/fourStars.png" width="200"></li>
                    <li><img src="images/exampleLogo4.png" width="200"><img src="images/fourStars.png" width="200"></li>
                    <li><img src="images/exampleLogo4.png" width="200"><img src="images/fourStars.png" width="200"></li>
                    <li><img src="images/exampleLogo4.png" width="200"><img src="images/fourStars.png" width="200"></li>
                    <li><img src="images/exampleLogo4.png" width="200"><img src="images/fourStars.png" width="200"></li>
                </ul>
                
                <div id="profileMore">
                    <a href="profilePortfolio.php"><button type="button">See More...</button></a>
                </div>
            </div>
            
        </div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>
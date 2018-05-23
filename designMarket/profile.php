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
            
            <div id="profileHeader">
                <div id="profilePicture">
                    <img src="images/aashish.png" width="250">
                </div>
                
                <div id="profileInfo">
                    <h2>Username</h2>
                    <p>Description Description Description Description Description Description Description Description Description Description Description Description Description Description </p>
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
                    <a href="profilePortfolio.php"><button type="button" class="btn btn-default">See More...</button></a>
                </div>
            </div>
            
        </div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>
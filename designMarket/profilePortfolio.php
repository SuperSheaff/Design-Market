<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Portfolio</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        <script></script>
        
    </head>
    
    <body>
    
        <?php include('header.php'); ?>
            
        <div id="profileContainer">
            
            <div id="portfolioHeader">
                
                <h1>Username's Portfolio</h1>
                <a href="profile.php"><button>Go Back</button></a>
                
            </div>
            
            <div id="profilePortfolio">
                
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
                
            </div>
            
        </div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>
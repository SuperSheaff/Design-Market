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
        <script>
        
        </script>
        
    </head>
    
    <body>
    
        <header>
        
            <div class="content">
                
                <nav id="navigationMenu">
        
                    <li><a href="home.html"  id="homeButton"><img src="images/logo.png" width="75"></a></li>
            
                    <ul> 
                        <li><a href="marketplace.html">Marketplace</a></li> 
                        <li><a href="support.html">Support</a></li> 
                    </ul>
                
                </nav>
                
                <!-- Needs php: When User is logged in, should show Profile button instead of Login/Register -->
                
                <nav id="loginButtons">
                    
                    <ul>
                        <a href="login.html"><li id="loginButton">Login</li></a> 
                        <a href="register.html"><li id="registerButton">Sign Up</li></a> 
                    </ul>
                </nav>
                
            </div>
        
        </header>
        
    </body>

</html>
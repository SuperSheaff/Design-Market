<!DOCTYPE html>

<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        <script>
        
        </script>
        
    </head>
    
    <body>
    
        <header>
        
            <div class="content">
                
                <nav id="navigationMenu">
        
                    <li><a href="home.php"  id="homeButton"><img src="images/logo.png" width="70"></a></li>
            
                    <ul> 
                        <li><a href="marketplace.php">Marketplace</a></li> 
                        <li><a href="support.php">Support</a></li> 
                    </ul>
                
                </nav>
                
                <!-- Needs php: When User is logged in, should show Profile button instead of Login/Register -->
                
                <?php 
                if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) { ?>
                
                <nav id="loginButtons">
                    
                    <ul>
                        <li><a id="loginButton" href="login.php">Login</a></li> 
                        <li><a id="registerButton" href="register.php">Sign Up</a></li> 
                    </ul>
                </nav>
                
                <?php
                } else { ?>
                    <nav id="loginButtons">
                        <ul>
                            <li><a id= "loginButton" href="profile.php?id=<?php echo $_SESSION['id'] ?>"><?php echo $_SESSION['username']; ?></a></li>
                        </ul>
                    </nav>
                <?php } ?>
                
            </div>
        
        </header>
        
    </body>

</html>

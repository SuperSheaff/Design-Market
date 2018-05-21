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
    
        <header>
        
            <div class="content">
                
                <nav id="navigationMenu">
        
                    <li><a href="home.php"  id="homeButton"><img src="images/logo.png" width="100"></a></li>
            
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
                        <a href="login.php"><li id="loginButton">Login</li></a> 
                        <a href="register.php"><li id="registerButton">Sign Up</li></a> 
                    </ul>
                </nav>
                <?php 
                } else { 
                            echo $_SESSION['username'];
                } ?>
                
            </div>
        
        </header>
        
        <div id="container">
        
            <div id="banner">
            
                <div class="content">
                
                    <h1>Hire Graphic Designers for jobs online</h1>
                    <h2>A creative platform for creative people.</h2>
                    
                </div>
                
            </div>
            
            <div id="about">
                
                <div class="content">
                    
                    <div id="aboutLeft">
                    
                        <h2>How does it work?</h2>
                        <p>It's simple and easy. Do you have any design jobs that you want completed? Are you a designer looking for work?</p>
                        <p>Look no further, welcome to Design Market, your hub for all things design. Create an account in minutes, post a job for designers to find, or look for jobs yourself</p>
                        <p id="brownBorder">Design Market is helps you make secure payments and offers access to a community of reviewed professionals.</p>
                    
                        <h2>What are you waiting for?</h2>
                        
                        <ul>
                            <li>Reason we're so great and you should join us.</li>
                            <li>Another reason we're so great and you should join us.</li>
                            <li>Another reason we're so great and you should join us.</li>
                            <li>Another reason we're so great and you should join us.</li>
                            <li>Another reason we're so great and you should join us.</li>
                        </ul>
                        
                    </div>
                    
                    <div id="aboutRight">
                        
                        <p>Better make a sweet graphic animation here</p>
                        <img src="images/logo.png" width="300">
                        
                    </div>
                
                </div>
            
            </div>
            
            <div id="examples">
                
                <div class="content">
                
                    <h2>Wondering what you can expect?</h2>
                    <h2>Here are some jobs that have been completed:</h2>
                    
                    <ul>
                        <li><img src="images/logo.png" width="200"><p>Wow this ones great</p></li>
                        <li><img src="images/logo.png" width="200"><p>I like this one</p></li>
                        <li><img src="images/logo.png" width="200"><p>Nah this one is the best</p></li>
                        <li><img src="images/logo.png" width="200"><p>ok</p></li>
                    </ul>
                    
                    <h2>Section will have the 'users' that made good projects and their rating</h2>
                
                </div>
            
            </div>
            
            <div id="startNow">
                
                <div class="content">
                
                    <h2>What kind of project do you want to start?</h2>
                    
                    <ul>
                        <li><h3>Logo Design</h3><img src="images/randomPencilFromInternet.jpg"></li>
                        <li><h3>Poster Design</h3><img src="images/randomPencilFromInternet.jpg"></li>
                        <li><h3>Web Design</h3><img src="images/randomPencilFromInternet.jpg"></li>
                        <li><h3>Banner Design</h3><img src="images/randomPencilFromInternet.jpg"></li>
                    </ul>
                
                </div>
            
            </div>
            
            <div id="meet">
                
                <div class="content">
                
                    <h1>Meet the Makers</h1>
                    
                    <ul>
                        <li><h2>Ben Fowler</h2><img src="images/ben.png"><h3>Front-End Designer</h3><p>Completing his Bachelor of Multimedia Design, strong skills across most Creative Cloud applications and skills in website development and javascript programming.</p></li>
                        <li><h2>Lachlan Paulsen</h2><img src="images/lachlan.png"><h3>Back-End Programmer</h3><p>Stuff about meStuff about meStuff about meStuff about meStuff about meStuff about meStuff about meStuff about meStuff about meStuff about meStuff about me</p></li>
                        <li><h2>Aashish Kumar</h2><img src="images/aashish.png"><h3>Graphic Designer</h3><p>Stuff about meStuff about meStuff about meStuff about meStuff about meStuff about meStuff about meStuff about meStuff about meStuff about meStuff about me</p></li>
                    </ul>
                
                </div>
                
            </div>
            
        </div>
        
        <footer>
                
            <div id="siteMap">
                
                <ul>
                    <li><h4>Marketplace</h4></li>
                    <li><p>Logo Design</p></li>
                    <li><p>Poster Design</p></li>
                    <li><p>Animation</p></li>
                    <li><p>Web Design</p></li>
                     <li><p>Banner Design</p></li>
                </ul>
                
                <ul>
                    <li><h4>Support</h4></li>
                    <li><p>FAQ</p></li>
                    <li><p>How does it work?</p></li>
                    <li><p>Security</p></li>
                </ul>
                
                <ul>
                    <li><h4>Terms</h4></li>
                    <li><p>Privacy Policy</p></li>
                    <li><p>Terms and Conditions</p></li>
                    <li><p>Copyright Policy</p></li>
                    <li><p>Code of Conduct</p></li>
                    <li><p>Fees and Charges</p></li>
                </ul>
                
            </div>
            
            <div id="copyright">
                
                <p>Design Market ® is a registered Project of University of Queensland (St Lucia)</p>
                <p>Copyright © 2018 Design Market Creation Team</p>
                
            </div>
            
        </footer>
    
    </body>
    
</html>
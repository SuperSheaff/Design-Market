<?php 
    session_start();
?>
<!DOCTYPE html>

<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Post a Project</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        
        <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

        <script>
            function minCheck (element) {
                if ($(element).val() == "") {
                    $(element).val(0);
                }
                
		else if ($(element).val() > $("#projectMaxBudget").val()) {
				$(element).val($("#projectMaxBudget").val());
		  }
            }
            
            function maxCheck (element) {
                if ($(element).val() == "") {
                    $(element).val(0);
                }
                
            
                else if ($(element).val() > $("#projectMinBudget").val()) {
                    $(element).val($("#projectMinBudget").val());
                }
                
                
            }
       </script>
        
    </head>
    
    <body>
    
        <header>
        
            <div class="content">
                
                <nav id="navigationMenu">
        
                    <li><a href="home.html"  id="homeButton"><img src="images/logo.png" width="80"></a></li>
            
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
        
        <div id="postContainer">
            
            <li>
                <h1>Post a Job!</h1>
                <p>Post a job and become a client, letting Graphic Designers bid on your job. Choose from the bids based on the Graphic Designers style, ratings, previous works and also how much money and time they bid.</p>
                <br><br>
            </li>
            
            
            <form method="post" action="">
            <li>
                <h1>Name your project</h1>
                <input type="text" name="name" placeholder="e.g Design a logo for my company">
                <br><br>
            </li>
            
            <li>
                <h1>Describe your idea</h1>
                <p>Let the designers know what you want, detail your idea and what it involves. Give a good description of the project, a little bit about yourself, why this project started and where you are at with the project.</p>
                <textarea rows="4" cols="50" name="comment" form="postform" placeholder="Tell us about your vision..."></textarea>
                <br><br>
            </li>
            
            <li>
                <h1>Inspiration</h1>
                <p>Upload images that relate to your project, whether that be progress images,  concept sketches or general inspiration.</p>
                <input type="file" name="uploadInspiration" multiple>
                <br><br>
            </li>
            
            <li id="budgetList">
                <h1>Budget</h1>
                <p>Select your budget range from which people can bid between, you may also select whether it is a hard budget or soft budget. Soft budget meaning bidders can bid above or below your budget range.</p>
    
                <div id="postBudget">
                    
                <h4>Budget Minimum</h4>
                    <span class="AUD"><input id="projectMinBudget" type="number" name="minSum" value="0" step=".01" onchange="minCheck(this)" min="0"></span>
                </div>
                
                <div id="postBudget">
                <h4>Budget Maximum</h4>
                <input id="projectMaxBudget" type="number" name="maxSum" value="100" step=".01" onchange="maxCheck(this)" min="1">
                </div>
                
                <div id="postBudget">
                <h4>Budget Type</h4>
                <input id="budgetType" type="radio" name="budgetType" value="Soft Budget">Soft Budget
                <br><br>
                <input id="budgetType" type="radio" name="budgetType" value="Hard Budget">Hard Budget
                </div>
                
                <div id="privacyType">
                    <h4>Privacy Type</h4>
                    <p>Spheel</p>
                    <input id="privacyType" type="radio" name="privacyType" value="public">Public
                    <br><br>
                    <input id="privacyType" type="radio" name="privacyType" value="private">Private
                </div>
            </li>
            
            <input id="postProject" type="submit" value="Post Project">

            <li>
                <h5>By pressing 'Post Project' you are agreeing to Design Markets Terms and Conditions</h5>
            </li>
                
            </form>
            
        
        </div>
    
    </body>
    
</html>
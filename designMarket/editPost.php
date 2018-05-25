<?php 
    session_start();
?>
<!DOCTYPE html>

<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market - Edit Project</title>
        
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
                } else if ($(element).val() > $("#projectMaxBudget").val()) {
					$(element).val($("#projectMaxBudget").val());
		  		}
            }
            
            function maxCheck (element) {
                if ($(element).val() == "") {
                    $(element).val(0);
                } else if ($(element).val() < $("#projectMinBudget").val()) {
                    $(element).val($("#projectMinBudget").val());
                }
                
                
            }
       </script>
        
    </head>
    
    <body>
        
        <?php include('header.php'); ?>      
            
        <div id="postContainer">
            
            <li>
                <h1>Edit Job</h1>
            </li>
            
            
            <form method="POST" action="postedit.php" enctype="multipart/form-data">
	            <li>
	                <h1>Edit project name</h1>
	                <input type="text" name="name" placeholder="e.g Design a logo for my company">
	                <br><br>
	            </li>
	            
	            <li>
	                <h1>Edit project Description</h1>
	                <textarea rows="4" cols="50" name="description" placeholder="Tell us about your vision..." maxlength="100"></textarea>
	            </li>
	            
	            <li>
	                <h1>Edit Inspiration</h1>
	                <input type="file" name="uploadInspiration">
	                <br><br>
	            </li>
	            
	            <li id="budgetList">
	                <h1>Edit Budget</h1>
	    
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
	                <input id="budgetType" type="radio" name="budgetType" value="Soft">Soft Budget
	                <br><br>
	                <input id="budgetType" type="radio" name="budgetType" value="Hard">Hard Budget
	                </div>
	            </li>
	            
	            <div id="postPrivacy">
	                <h1>Privacy Type</h1>
	                <p>Select your privacy type, Public meaning you anyone can see the bids and comments on your post, or Private meaning that only you can see the bids and comments on your post.</p>
	                <input id="privacyType" type="radio" name="privacyType" value="Public">Public
	                <br><br>
	                <input id="privacyType" type="radio" name="privacyType" value="Private">Private
	            </div>
	                
	            
	            
	            <input id="postProject" type="submit" value="Save the Project">
                
                <!-- Should appear only after post is made when editting a post -->
                
                <form method="POST" action="delete.php" enctype="multipart/form-data">
                
                    <input id="deleteProject" type="submit" value="Delete Project">
                    
                </form>
                
            </form>
            
        
        </div>
    
    </body>
    
</html>

<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/homeButton.png" />
    
    <head>
        
        <title>Design Market</title>
        
        <link rel="icon" type="image/png" href="images/logo.png">
        
        <!-- Space for scripts -->
        <script></script>
        
    </head>
    
    <body>
    
        <?php include('header.php'); ?>
            
        <div id="jobContainer">
            
            <div id="jobHeader">
                
                <div id="jobInfo">
                    <img src="images/aashish.png" width="100">
                    <h1>Job Title</h1>
                    <h2>Username</h2>
                    <p>Job Description Job Description Job Description Job Description Job Description Job Description Job Description Job Description Job Description Job Description </p>
                    
                </div>              
            
            </div>
            
            <div id="jobInspiration">
                    
                <ul>
                    <li><img src="images/exampleLogo4.png" width="250"></li>
                </ul>
                    
            </div>
            
            <div id="jobOptions">
                
            
            <a href="editPost.php"><button>Edit Post</button></a>
            </div>
            
            
            
            <div id="bidContainer">
                <h2>Make a Bid</h2>
                
                <textarea rows="4" cols="50" name="description" placeholder="Tell us about your vision for this job..." maxlength="100"></textarea>
                <br>
                <div id="postBudget" style="float: none; margin: 0 auto; margin-bottom: 15px; height: auto;">
                    <h3>Bid Budget</h3>
                    <input id="userBudgetBid" type="number" name="maxSum" value="100" step=".01" min="1">
                </div>
                <button style="font-size: 20px;">Make Bid</button>
            </div>
            
            <div id="bidSection">
                
                <h2 style="text-align: center;">Bids</h2>
                
                <div id="userBid">
                    
                    <div id="bidInfo">
                        <h2>Username</h2>
                        <h3>$$$$$$$$</h3>
                        <p>job reason job reason job reason job reason job reason job reason job reason job reason </p>
                    </div>
                    
                    <div id="bidOptions">
                        <button style="padding: 10px;">Accept Bid</button>
                        <button style="padding: 10px;">Decline Bid</button>
                    </div>
                    
                </div>
                
                <div id="userBid">
                    
                    <div id="bidInfo">
                        <h2>Username</h2>
                        <h3>$$$$$$$$</h3>
                        <p>job reason job reason job reason job reason job reason job reason job reason job reason </p>
                    </div>
                    
                    <div id="bidOptions">
                        <button style="padding: 10px;">Accept Bid</button>
                        <button style="padding: 10px;">Decline Bid</button>
                    </div>
                    
                </div>
                
                <div id="userBid" style="margin-bottom: 10px;">
                    
                    <div id="bidInfo">
                        <h2>Username</h2>
                        <h3>$$$$$$$$</h3>
                        <p>job reason job reason job reason job reason job reason job reason job reason job reason </p>
                    </div>
                    
                    <div id="bidOptions">
                        <button style="padding: 10px;">Accept Bid</button>
                        <button style="padding: 10px;">Decline Bid</button>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>

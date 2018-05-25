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
            <a><button>Write a Comment</button></a>
            <a href="editPost.php"><button>Edit Post</button></a>
            <a><button>Make a Bid</button></a>
            </div>
            
            <div id="commentSection">
            
            </div>
            
            <div id="bidSection">
                
            </div>
            
        </div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>

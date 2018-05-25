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
    
        <?php include('header.php'); ?>
        
        <div id="supportPage">
                
            <div class="content">
                
                <h1>How Can we Help</h1>
                    
                    <ul>
                        <a href="faq.php">
                            <li>
                                <h2>FAQs</h2>
                                <img src="images/faq.png" width="300">
                                <p>Frequently asked questions with detailed responses</p>
                            </li>
                        </a>
                        
                        <a href="howDoesItWork.php">
                            <li>
                                <h2>How Does it Work</h2>
                                <img src="images/hdiw.png" width="300">
                                <p>Create an account in minutes, post a job for designers to find, or look for jobs yourself</p>
                            </li>
                        </a>
                    </ul>
                
             </div>         
        </div>
            
        </div>
		
		</div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>
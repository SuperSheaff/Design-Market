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
		function myFunction() {
            alert("Your message has been sent");
        }
		</script>
        
    </head>
    
    <body>
    
        <?php include('header.php'); ?>
		
		<div id="supportContainer">
		
            <h1>FAQs</h1>
            <ul>
                
                <li>
                    <h2>Q. How do I get started?</h2>
                    <p>
                        Answer: You can get started by exploring the market place, We offer variety of design jobs through business and potential designers for businessess
                    </p>
                </li>
                
                <li>
                    <h2>Q. Is it important to make an account?</h2>
                    <p>
                        Yes, in order to applying jobs or hiring designers, It is complusary to have an account 
                    </p>
                </li>
                
                <li>
                    <h2>Q. What are my benifits as a Designer?</h2>
                    <p>
                        Answer: A source of Income, make contacts with leading companies and you can work from home
                    </p>
                </li>
                
                <li>
                    <h2>Q. What are my benifits as a Business hiring designers?</h2>
                    <p>
                        Answer: Low cost project completion, find Designers you can trust with Design Market's rating system and reviews, various mediums available to suit your budget and needs
                    </p>
                </li>
                
                <li>
                    <h2>Q. How do I get started?</h2>
                    <p>
                        Answer: You can get started by exploring the market place, We offer variety of design jobs through business and potential designers for businessess
                    </p>
                </li>
            </ul>
        
            <div class="sContainer">
                 <h2>Still have some questions? send your question to us and we will response as soon as possible</h2>
                <form>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname"></label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        </div>
                        <div class="col-75">
                            <input type="text" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        </div>
                        <div class="col-75">
                            <select id="country" name="country">
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        </div>
                        <div class="col-75">
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <button onclick="myFunction()">Send</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
        
        <?php include('footer.php'); ?>
    
    </body>
    
</html>